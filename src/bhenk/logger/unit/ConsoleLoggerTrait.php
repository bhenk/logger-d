<?php

namespace bhenk\logger\unit;

use bhenk\logger\build\ConsoleLoggerCreator;
use bhenk\logger\build\LoggerFactory;
use bhenk\logger\build\LoggerTypes;
use bhenk\logger\handle\ColorSchemeInterface;
use bhenk\logger\handle\ConsoleHandler;
use bhenk\logger\log\Log;
use Monolog\Level;
use ReflectionClass;
use ReflectionException;
use RuntimeException;
use function fwrite;
use function method_exists;
use function str_pad;

/**
 * Trait capable of redirecting log output to console.
 *
 * .. note::
 *    Caveat: only log statements logged via :ref:`bhenk\logger\log\Log` will be redirected.
 *    Test cases that want to inspect
 *    log output of classes under test use this trait. It is recommended to use this trait together with
 *    :ref:`bhenk\logger\unit\LogAttribute`.
 *
 * Example usage:
 *
 * .. code-block:: php
 *
 *    class SomeTest extends TestCase {
 *        use ConsoleLoggerTrait;
 *    ...
 *
 * All log statements via :ref:`bhenk\logger\log\Log` will be redirected during runtime of the TestCase,
 * permanently.
 * At least until you remove the ``use`` statement. When more flexibility is required also use
 * :ref:`bhenk\logger\unit\LogAttribute`.
 *
 * .. code-block:: php
 *
 *      #[LogAttribute()]
 *      class SomeTest extends TestCase {
 *          use ConsoleLoggerTrait;
 *      ...
 *
 * All log statements via :ref:`bhenk\logger\log\Log` will be redirected.
 * To stop redirecting log statements for the entire
 * TestCase just type *false* as the first argument for :ref:`bhenk\logger\unit\LogAttribute`. To change the
 * *Level* of all log statements that pass to console do something like
 * ``#[LogAttribute(true, Level::Error)]``. When more fine-grained control is needed use
 * :ref:`bhenk\logger\unit\LogAttribute` also on individual test methods.
 *
 * .. code-block:: php
 *
 *          #[LogAttribute(false)]
 *          public function testSomeFeature() : void {
 *               ...
 *          }
 *
 * Suppress all logging via console of code touched by SomeFeature. When revisiting the test method just
 * change the LogAttribute parameter to true. Optionally change the level of log statements seen via console
 * as well.
 *
 * The on/off setting of :ref:`bhenk\logger\unit\LogAttribute` on class level has precedence
 * over that on method level. A class
 * with ``#[LogAttribute(false)]`` will never output via console.
 *
 * The setting of the level parameter of :ref:`bhenk\logger\unit\LogAttribute` on individual
 * methods has precedence over that set
 * on class level.
 *
 * If you override one of the
 * `PHPUnit fixtures <https://docs.phpunit.de/en/10.0/fixtures.html#fixtures>`_ make sure to call the
 * corresponding trait-method:
 *
 * .. code-block::
 *    :emphasize-lines: 4, 10
 *
 *    #[LogAttribute(true)]
 *    class ResourceTest extends TestCase {
 *        use ConsoleLoggerTrait {
 *            setUp as public traitSetUp;
 *        }
 *
 *        private Resource $resource;
 *
 *        public function setUp(): void {
 *            $this->traitSetUp();
 *            $this->resource = new Resource();
 *        }
 *
 *
 * This trait calls on :ref:`bhenk\logger\log\Log` to set the type of logger temporarily to
 * {@link LoggerTypes::clt}.
 * Skies look bright if the logger of this type has the handler :ref:`bhenk\logger\handle\ConsoleHandler`.
 * If so, this trait will use the :ref:`bhenk\logger\handle\ColorSchemeInterface` set on this handler.
 * Otherwise, a RuntimeException will be thrown with the message that you messed up the code.
 *
 * @see ConsoleLoggerCreator
 */
trait ConsoleLoggerTrait {

    /**
     * The logger type used
     *
     * Logger types are obtained from {@link LoggerFactory}. In this case the Logger obtained is equipped
     * with a {@link ConsoleHandler}.
     */
    private static ColorSchemeInterface $cs;
    private static ReflectionClass $reflectionClass;
    private static bool $class_on = true;
    private static Level $class_level = Level::Debug;
    private bool $method_on = true;
    private Level $method_level = Level::Debug;

    /**
     * Sets up before the {@link PHPUnit\Framework\TestCase} starts running.
     *
     * If {@link LogAttribute} on class level is absent or
     * enabled, will print a line to console with the name of the TestCase.
     * Will call on :tech:`parent::setUpBeforeClass()` after this.
     * @return void
     */
    public static function setUpBeforeClass(): void {
        self::$reflectionClass = new ReflectionClass(static::class);
        $attr_class = self::$reflectionClass->getAttributes(LogAttribute::class);
        if (!empty($attr_class)) {
            $args = $attr_class[0]->getArguments();
            self::$class_on = $args[0] ?? true;
            self::$class_level = $args[1] ?? Level::Debug;
        }
        if (self::$class_on) {
            $logger = LoggerFactory::getLogger(LoggerTypes::clt);
            if (method_exists($logger, "getHandlers")) {
                /** @var ConsoleHandler $handler */
                $handler = $logger->getHandlers()[0];
                self::$cs = $handler->getColorScheme();
                $handler->resetCount();
            } else {
                // unreachable code
                throw new RuntimeException("Code mess: expected " . ConsoleHandler::class);
            }
            fwrite(STDOUT, PHP_EOL
                . self::$cs::RESET
                . self::$cs::TRAIT_HELLO
                . "hello " . static::class
                . self::$cs::RESET
                . PHP_EOL);
        }
        parent::setUpBeforeClass();
    }

    /**
     * Tears down after the {@link PHPUnit\Framework\TestCase} has run.
     *
     * If {@link LogAttribute} on class level is absent or enabled,
     * will print a farewell message to console as demarcation of the TestCase. Will call on
     * :tech:`parent::tearDownAfterClass()` after this.
     *
     * @return void
     */
    public static function tearDownAfterClass(): void {
        Log::setType(LoggerTypes::log);
        if (self::$class_on) {
            fwrite(STDOUT, self::$cs::RESET
                . self::$cs::TRAIT_GOODBYE
                . "goodbye " . static::class
                . self::$cs::RESET
                . PHP_EOL . PHP_EOL);
        }
        parent::tearDownAfterClass();
    }

    /**
     * Set up before an individual test method starts running.
     *
     * If {@link LogAttribute} on method level is absent or enabled, will print the name of the method to console.
     * Sets the {@link LoggerTypes::clt} as type on {@link bhenk\logger\log\Log}.
     * Will call on :tech:`parent::setUp()` after this.
     *
     * @throws ReflectionException
     */
    public function setUp(): void {
        if (self::$class_on) {
            if (method_exists(PHPUnit\Framework\TestCase::class, "name")) {
                $methodName = parent::name();
            } elseif (method_exists(PHPUnit\Framework\TestCase::class, "getName")) {
                $methodName = parent::getName();
            } else {
                $methodName = $this->name();
            }
            $reflection_method = self::$reflectionClass->getMethod($methodName);
            $attr_method = $reflection_method->getAttributes(LogAttribute::class);
            if (!empty($attr_method)) {
                $args = $attr_method[0]->getArguments();
                $this->method_on = $args[0] ?? true;
                $this->method_level = $args[1] ?? Level::Debug;
            }
            if ($this->method_on) {
                Log::setType(LoggerTypes::clt);
                Log::setLevel($this->method_level);
                fwrite(STDOUT, self::$cs::RESET . PHP_EOL
                    . self::$cs::TRAIT_METHOD
                    . str_pad($methodName, 120, "-")
                    . self::$cs::END
                    . PHP_EOL);
            }
        }
        parent::setUp();
    }

    /**
     * Resets the Logger type
     *
     * Will reset the {@link bhenk\logger\log\Log} to its original {@link LoggerTypes LoggerType}.
     * Calls :tech:`parent::tearDown()` after this.
     * @return void
     */
    public function tearDown(): void {
        Log::setType(LoggerTypes::log);
        parent::tearDown();
    }
}
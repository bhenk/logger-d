<?php

namespace bhenk\logger\log;

use bhenk\logger\build\LoggerFactory;
use bhenk\logger\build\LoggerTypes;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LogLevel;
use Stringable;
use function method_exists;

/**
 * Default log agent.
 *
 * The type of *Logger* used by this log agent defaults to "log" and has a two logfiles, one for all statements.
 * Log messages exceeding a certain level will also be logged to an error logfile.
 *
 * Documentation of logging calls copied from https://www.php-fig.org/psr/psr-3/.
 *
 */
class Log {

    private static LoggerTypes $type = LoggerTypes::log;

    /**
     * Get the type of logger used by this log agent.
     *
     * @return LoggerTypes type currently in use.
     */
    public static function getType(): LoggerTypes {
        return self::$type;
    }

    /**
     * Set the type of logger used by this log agent.
     *
     * @param LoggerTypes $type the new type.
     * @return LoggerTypes the old type.
     */
    public static function setType(LoggerTypes $type): LoggerTypes {
        $previous = self::$type;
        self::$type = $type;
        return $previous;
    }

    /**
     * Set the level at which the handlers of this log agents logger will fire.
     *
     * **Warning:** do not use this method for logging configuration. Use a logger definition file instead.
     *
     * Caveat: this method will only have effect on implementations of logger that expose
     * the method *getHandlers()* and only on handlers that expose the method *setLevel()*.
     *
     * @param int|string|Level|LogLevel $level the level to set on the handlers of this log agent.
     * @return void
     */
    public static function setLevel(int|string|Level|LogLevel $level): void {
        $logger = LoggerFactory::getLogger(self::$type);
        if ($logger instanceof Logger) {
            foreach ($logger->getHandlers() as $handler) {
                if (method_exists($handler, "setLevel")) {
                    $handler->setLevel($level);
                }
            }
        }
    }

    /**
     * System is unusable.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function emergency(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->emergency($message, $context);
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function alert(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->alert($message, $context);
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function critical(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->critical($message, $context);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function error(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->error($message, $context);
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function warning(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->warning($message, $context);
    }

    /**
     * Normal but significant events.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function notice(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->notice($message, $context);
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function info(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->info($message, $context);
    }

    /**
     * Detailed debug information.
     *
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function debug(Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->debug($message, $context);
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param int|Level|string $level
     * @param Stringable|string $message
     * @param array $context
     * @return void
     */
    public static function log(int|string|Level $level, Stringable|string $message, array $context = []): void {
        LoggerFactory::getLogger(static::getType())->log($level, $message, $context);
    }

}
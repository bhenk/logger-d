<?php

namespace bhenk\logger\build;

use Exception;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use function dirname;
use function in_array;
use function is_dir;
use function is_file;

/**
 * Static class to create and stock Loggers
 */
class LoggerFactory {

    /**
     * The ancestor child directory that is expected to hold the log configuration file
     */
    const CONFIG_DIR = "config";
    /**
     * The expected configuration filename
     */
    const LOG_CONFIG_FILE = "log_config.php";

    private static string|bool $config_file;
    private static array $loggers = [];
    private static array $definitions = [];
    private static bool $quiet = false;

    /**
     * Get the current configuration filename or *false* if no configuration file was found
     *
     * @return bool|string the current configuration filename; *false* if not found
     */
    public static function getConfigFile(): bool|string {
        self::findConfigFile();
        return self::$config_file;
    }

    /**
     * Set the configuration file
     *
     * Loads logger definitions from the configuration file.
     *
     * @param bool|string $config_file
     */
    public static function setConfigFile(bool|string $config_file): void {
        self::$config_file = $config_file;
        self::loadDefinitions();
    }

    /**
     * Get the logger of the given type
     *
     * @param LoggerTypes $type
     * @return LoggerInterface
     */
    public static function getLogger(LoggerTypes $type): LoggerInterface {
        if (!in_array($type->name, self::$loggers)) {
            self::createLogger($type);
        }
        return self::$loggers[$type->name];
    }

    /**
     * Get the definition for the given type of logger (if any)
     *
     * @param LoggerTypes $type
     * @return array
     */
    public static function getDefinition(LoggerTypes $type): array {
        return self::$definitions[$type->name] ?? [];
    }

    /**
     * Set the definition for a given type of logger.
     *
     * @param LoggerTypes $type
     * @param array $definition
     * @return void
     */
    public static function setDefinition(LoggerTypes $type, array $definition = []): void {
        self::$definitions[$type->name] = $definition;
    }

    /**
     *
     * @return bool
     */
    public static function isQuiet(): bool {
        return self::$quiet;
    }

    /**
     * Sets whether the factory will output error messages to *STDOUT* when creating loggers
     *
     * @param bool $quiet
     */
    public static function setQuiet(bool $quiet): void {
        self::$quiet = $quiet;
    }

    private static function findConfigFile(): void {
        for ($i = 1; $i < 8; $i++) {
            $dir = dirname(__DIR__, $i);
            $config_dir = $dir . DIRECTORY_SEPARATOR . self::CONFIG_DIR;
            if (is_dir($config_dir)) {
                $config_file = $config_dir . DIRECTORY_SEPARATOR . self::LOG_CONFIG_FILE;
                if (is_file($config_file)) {
                    self::$config_file = $config_file;
                } else {
                    self::$config_file = false;
                    return;
                }
            }
        }
    }

    private static function loadDefinitions(): void {
        if (self::$config_file) {
            self::$definitions = require self::$config_file;
        }
    }

    private static function createLogger(LoggerTypes $type): void {
        try {
            if (empty(self::$definitions)) {
                self::findConfigFile();
                self::loadDefinitions();
            }
            $paras = self::$definitions[$type->name] ?? [];
            switch ($type) {
                case LoggerTypes::req:
                    $logger = (new RequestLoggerCreator())->create($paras);
                    self::$loggers[$type->name] = $logger;
                    break;
                case LoggerTypes::log:
                    $logger = (new DefaultLoggerCreator())->create($paras);
                    self::$loggers[$type->name] = $logger;
                    break;
                case LoggerTypes::clt:
                    $logger = (new ConsoleLoggerCreator())->create($paras);
                    self::$loggers[$type->name] = $logger;
                    break;
                default:
                    $logger = self::createDefaultOut();
                    self::$loggers[$type->name] = $logger;
                    $err = self::createDefaultErr();
                    $err->warning("No creator for logger type '" . $type->name . "'");
            }
        } catch (Exception $e) {
            $logger = self::createDefaultOut();
            self::$loggers[$type->name] = $logger;
            $err = self::createDefaultErr();
            $err->error("Unable to create logger '" . $type->name . "'", [$e]);
        }
    }

    /**
     * Create a minimal logger with a {@link StreamHandler} set to *php://stderr*.
     *
     * @return Logger
     */
    private static function createDefaultErr(): Logger {
        $factory_error_logger = "factory_error_logger";
        if (!in_array($factory_error_logger, self::$loggers)) {
            $paras = ["name" => "factory", "filename" => "logger/factory_error.log"];
            $logger = (new ErrorLoggerCreator())->create($paras);
            if (!self::$quiet) {
                $logger->pushHandler(new StreamHandler('php://stderr', Level::Debug));
            }
            self::$loggers[$factory_error_logger] = $logger;
        }
        return self::$loggers[$factory_error_logger];
    }

    /**
     * Create a minimal logger with a {@link StreamHandler} set to *php://stdout*.
     *
     * @return Logger
     */
    private static function createDefaultOut(): Logger {
        $logger = new Logger("out");
        $logger->pushHandler(new StreamHandler('php://stdout', 100));
        return $logger;
    }
}
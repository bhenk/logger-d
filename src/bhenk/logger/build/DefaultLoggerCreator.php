<?php

namespace bhenk\logger\build;

use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Processor\IntrospectionProcessor;

/**
 * Class capable of creating a default logger.
 *
 * The default logger logs standard log messages to a logfile. Log messages exceeding a certain level will also be
 * logged to an error logfile.
 */
class DefaultLoggerCreator extends AbstractLoggerCreator {

    /**
     * Default logfile
     */
    const LOG_FILENAME = "logger" . DIRECTORY_SEPARATOR . "logger.log";
    /**
     * Default max logfiles to keep around
     */
    const LOG_MAX_FILES = 5;
    /**
     * Default log level
     */
    const LOG_LEVEL = Level::Info;
    /**
     * Format for log entries
     */
    const FORMAT = "%level_name% | %datetime% | %message% | %context% %extra%\n";
    /**
     * Date format in log entries
     */
    const DATE_FORMAT = "Y-m-d H:i:s";
    /**
     * Add an IntrospectionProcessor
     */
    const INTROSPECTION_PROCESSOR = true;
    /**
     * Default error filename
     */
    const ERR_FILENAME = "logger" . DIRECTORY_SEPARATOR . "error.log";
    /**
     * Default max error files to keep around
     */
    const ERR_MAX_FILES = 5;
    /**
     * Default error level
     */
    const ERR_LEVEL = Level::Error;
    /**
     * Default channel name
     */
    const DEFAULT_CHANNEL = "log";

    /**
     * Creates a default logger.
     *
     * Optional {@link $paras} have the format
     *
     * ```
     * [
     *    "channel" => "{string}",
     *    "log_file" => "{string}",
     *    "log_max_files" => {int},
     *    "log_level" => Level|LogLevel|string|int,
     *    "err_file" => "{string}",
     *    "err_max_files" => {int},
     *    "err_level" => Level|LogLevel|string|int,
     *    "format" => "{string}",
     *    "date_format" => "{string}",
     *    "introspection" => {bool},
     * ]
     * ```
     *
     * @inheritDoc
     */
    function create(array $paras = []): Logger {
        $channel = $paras["channel"] ?? self::DEFAULT_CHANNEL;
        $logger = new Logger($channel);

        $log_file = $this->makeAbsolute($paras["log_file"] ?? self::LOG_FILENAME);
        $log_max_files = $paras["log_max_files"] ?? self::LOG_MAX_FILES;
        $log_level = $paras["log_level"] ?? self::LOG_LEVEL;
        $log_handler = new RotatingFileHandler($log_file, $log_max_files, $log_level);
        $format = $paras["format"] ?? self::FORMAT;
        $date_format = $paras["date_format"] ?? self::DATE_FORMAT;
        $introspection = $paras["introspection"] ?? self::INTROSPECTION_PROCESSOR;
        $formatter = new LineFormatter($format, $date_format,
            true, true, false);
        $log_handler->setFormatter($formatter);
        if ($introspection)
            $log_handler->pushProcessor(new IntrospectionProcessor(Level::Debug, [], 1));
        $logger->pushHandler($log_handler);

        $err_file = $this->makeAbsolute($paras["err_file"] ?? self::ERR_FILENAME);
        $err_max_files = $paras["err_max_files"] ?? self::ERR_MAX_FILES;
        $err_level = $paras["err_level"] ?? self::ERR_LEVEL;
        $err_handler = new RotatingFileHandler($err_file, $err_max_files, $err_level);
        $formatter = new LineFormatter($format, $date_format,
            true, true, true);
        $err_handler->setFormatter($formatter);
        if ($introspection)
            $err_handler->pushProcessor(new IntrospectionProcessor(Level::Debug, [], 1));
        $logger->pushHandler($err_handler);
        return $logger;
    }
}
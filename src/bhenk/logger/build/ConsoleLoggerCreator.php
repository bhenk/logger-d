<?php

namespace bhenk\logger\build;

use bhenk\logger\handle\ColorSchemeDark;
use bhenk\logger\handle\ConsoleHandler;
use Monolog\Logger;
use Psr\Log\LogLevel;

/**
 * Class capable of creating a Logger that outputs to console
 *
 * The {@link Monolog\Logger} created is equipped with a {@link ConsoleHandler} that is optimized for logging
 * to console during test runs.
 *
 * @see ConsoleHandler
 * @see bhenk\logger\unit\ConsoleLoggerTrait
 */
class ConsoleLoggerCreator extends AbstractLoggerCreator {

    /**
     * Default channel
     */
    const CHANNEL = "clt";
    /**
     * Default LogLevel
     */
    const LEVEL = LogLevel::DEBUG;
    /**
     * By default, does not bubble
     */
    const BUBBLE = false;
    /**
     * Induce a white line before each log statement
     */
    const WHITE_LINE = true;
    /**
     * Regular expression used to filter lines in error traces
     */
    const STACK_MATCH = "/(.*?)/i";
    /**
     * Date format for log statements
     */
    const DATE_FORMAT = "H:i:s:u";
    /**
     * Exclamation on encountering an error
     */
    const EXCLAMATION = "chips!";
    /**
     * ColorScheme used by ConsoleHandler
     */
    const COLOR_SCHEME = ColorSchemeDark::class;

    /**
     * Creates a Logger that outputs to console
     *
     * The logger created has a {@link ConsoleHandler} that outputs log statements to console
     *
     * Optional {@link $paras} set behaviour of ConsoleHandler and have the following format:
     * ```
     *     "clt" => [
     *         "channel" => {string},
     *         "level" => {string|int|Monolog\Level|\Psr\Log\LogLevel},
     *         "bubble" => {bool},
     *         "white_line" => {bool},
     *         "stack_match" => {regex},
     *         "date_format" => {date format},  // "H:i:s:u"
     *         "exclamation" => {string},
     *         "color_scheme" => {string},      // bhenk\logger\handle\ColorSchemeInterface
     *     ]
     * ```
     * {@link $paras} can be incorporated in {@link LoggerFactory::LOG_CONFIG_FILE}.
     *
     * @inheritDoc
     * @param array $paras see above
     * @return Logger {@link Monolog\Logger} with a {@link ConsoleHandler}
     */
    function create(array $paras = []): Logger {
        $channel = $paras["channel"] ?? self::CHANNEL;
        $logger = new Logger($channel);
        $level = $paras["level"] ?? self::LEVEL;
        $bubble = $paras["bubble"] ?? self::BUBBLE;
        $white_line = $paras["white_line"] ?? self::WHITE_LINE;
        $stack_match = $paras["stack_match"] ?? self::STACK_MATCH;
        $date_format = $paras["date_format"] ?? self::DATE_FORMAT;
        $exclamation = $paras["exclamation"] ?? self::EXCLAMATION;
        $color_scheme = $paras["color_scheme"] ?? self::COLOR_SCHEME;
        $handler = new ConsoleHandler($level, $bubble, $white_line, $stack_match,
            $date_format, $exclamation, $color_scheme);
        $logger->pushHandler($handler);
        return $logger;
    }
}
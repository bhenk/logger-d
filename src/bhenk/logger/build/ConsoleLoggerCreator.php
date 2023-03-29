<?php

namespace bhenk\logger\build;

use bhenk\logger\handle\ColorSchemeDark;
use bhenk\logger\handle\ConsoleHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class ConsoleLoggerCreator extends AbstractLoggerCreator {

    const CHANNEL = "clt";
    const LEVEL = LogLevel::DEBUG;
    const BUBBLE = false;
    const WHITE_LINE = true;
    const STACK_MATCH = "/(.*?)/i";
    const DATE_FORMAT = "H:i:s:u";
    const EXCLAMATION = "chips!";
    const COLOR_SCHEME = ColorSchemeDark::class;

    /**
     * @inheritDoc
     */
    function create(array $paras = []): LoggerInterface {
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
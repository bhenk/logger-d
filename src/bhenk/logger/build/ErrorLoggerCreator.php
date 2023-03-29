<?php

namespace bhenk\logger\build;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

class ErrorLoggerCreator extends AbstractLoggerCreator {

    const FILENAME = "logger" . DIRECTORY_SEPARATOR . "error.log";

    /**
     * @inheritDoc
     */
    function create(array $paras = []): Logger {
        $name = $paras["name"] ?? "error";
        $logger = new Logger($name);
        $filename = $paras["filename"] ?? self::FILENAME;
        $logger->pushHandler(new StreamHandler($this->makeAbsolute($filename), Level::Debug));
        return $logger;
    }
}
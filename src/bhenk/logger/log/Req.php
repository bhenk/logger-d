<?php

namespace bhenk\logger\log;

use bhenk\logger\build\LoggerTypes;

/**
 * A log agent for recording request parameters.
 *
 * The type of *Logger* used by this log agent defaults to "req".
 *
 * Documentation of logging calls copied from https://www.php-fig.org/psr/psr-3/.
 *
 */
class Req extends Log {

    private static LoggerTypes $type = LoggerTypes::req;

    /**
     * @inheritDoc
     *
     * @return LoggerTypes
     */
    public static function getType(): LoggerTypes {
        return self::$type;
    }

    /**
     * @inheritDoc
     *
     * @param LoggerTypes $type
     * @return LoggerTypes
     */
    public static function setType(LoggerTypes $type): LoggerTypes {
        $previous = self::$type;
        self::$type = $type;
        return $previous;
    }

}
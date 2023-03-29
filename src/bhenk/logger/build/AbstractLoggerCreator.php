<?php

namespace bhenk\logger\build;

use RuntimeException;
use function dirname;
use function is_dir;
use function realpath;

abstract class AbstractLoggerCreator implements LoggerCreatorInterface {


    /**
     * Tries to make the given filename absolute
     *
     * An absolute {@link $filename} will be returned as such.
     *
     * This method will than try to locate an ancestor directory with a child with the name specified
     * by {@link LoggerCreatorInterface::LOG_DIR} (*logs*). The returned absolute filename will than point to
     * a child of this ancestor-child directory.
     *
     * A {@link $filename} is invalid if it is the empty string ("") or the slash forward (/).
     *
     * @param string $filename absolute or relative to ancestor directory 'logs'
     * @return string absolute filename
     */
    public function makeAbsolute(string $filename): string {
        if (str_starts_with($filename, "/")) {
            return $filename;
        }
        for ($i = 1; $i < 8; $i++) {
            $dir = dirname(__DIR__, $i);
            $log_dir = $dir . DIRECTORY_SEPARATOR . self::LOG_DIR;
            if (is_dir($log_dir)) {
                return realpath($log_dir) . DIRECTORY_SEPARATOR . $filename;
            }
        }
        throw new RuntimeException("Log directory '" . self::LOG_DIR . "' not found");
    }
}
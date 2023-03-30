<?php

namespace bhenk\logger\build;

use DateTimeInterface;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Processor\WebProcessor;

/**
 * Class capable of creating a request logger.
 *
 * The request logger outputs request properties to a file. Request properties are for instance
 *
 * * request url,
 * * ip address of the client,
 * * http_method,
 * * server,
 * * referrer,
 * * client browser
 *
 */
class RequestLoggerCreator extends AbstractLoggerCreator {

    /**
     * The default filename for a request logger
     */
    const FILENAME = "logger" . DIRECTORY_SEPARATOR . "req.log";
    /**
     * The default channel for a request logger
     */
    const CHANNEL = "req";

    private ?string $filename = null;

    /**
     * Creates a request logger.
     *
     * Optional {@link $paras} have the format
     *
     * ```
     * [
     *   "channel" => "{string}",               // optional, default "req"
     *   "level" => Level,                      // optional, default Level::Debug
     *   "filename" => "{string}",              // optional, default self::FILENAME
     *   "max_files" => {int},                  // optional, default 2
     *   "filename_format" => "{string}",       // optional, default "{filename}-{date}"
     *   "filename_date_format" => "{string}",  // optional, default "Y-m"
     *   "line_format" => "{string}}"           // optional, default "%datetime% %extra%\n"
     * ]
     * ```
     * The optional *filename* may be relative to the ancestor log directory.
     * {@see LoggerCreatorInterface::LOG_DIR}.
     *
     * @inheritdoc
     * @param array $paras see above
     * @return Logger a Logger that logs request properties in a file
     * @see WebProcessor
     *
     */
    function create(array $paras = []): Logger {
        $this->filename = $this->makeAbsolute($paras["filename"] ?? self::FILENAME);
        $handler = new RotatingFileHandler(
            $this->filename,
            $paras["max_files"] ?? 2,
            $paras["level"] ?? Level::Debug);
        $handler->setFilenameFormat(
            $paras["filename_format"] ?? "{filename}-{date}",
            $paras["filename_date_format"] ?? "Y-m");
        $formatter = new LineFormatter($paras["line_format"] ?? "%datetime% %extra%\n");
        $formatter->setDateFormat($paras["date_format"] ?? DateTimeInterface::W3C);
        $handler->setFormatter($formatter);
        $logger = new Logger($paras["channel"] ?? self::CHANNEL);
        $logger->pushHandler($handler);
        $logger->pushProcessor(function ($record) {
            $browser = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';
            $record['extra']['browser'] = $browser;
            return $record;
        });
        $logger->pushProcessor(new WebProcessor());
        return $logger;
    }

    /**
     * Gets the absolute filename of the logfile
     *
     * @return string|null the absolute filename of the logfile of the last logger created
     *    or *null* if a logger was not yet created
     */
    public function getFilename(): ?string {
        return $this->filename;
    }

}
<?php

namespace logger\build;

use bhenk\logger\build\LoggerCreatorInterface;
use bhenk\logger\build\RequestLoggerCreator;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use function dirname;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFileExists;
use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertStringContainsString;
use function PHPUnit\Framework\assertStringEndsWith;
use function PHPUnit\Framework\assertStringStartsWith;

class RequestLoggerCreatorTest extends TestCase {

    public function testMakeAbsolute() {
        $rlc = new RequestLoggerCreator();
        $result = $rlc->makeAbsolute("req.log");
        $expected_end = LoggerCreatorInterface::LOG_DIR
            . DIRECTORY_SEPARATOR . "req.log";
        assertStringEndsWith($expected_end, $result);
        assertStringStartsWith("/", $result);

        $result = $rlc->makeAbsolute("site_name/req/req.log");
        $expected_end = LoggerCreatorInterface::LOG_DIR
            . DIRECTORY_SEPARATOR . "site_name/req/req.log";
        assertStringEndsWith($expected_end, $result);
        assertStringStartsWith("/", $result);
    }

    public function testCreate() {
        $paras = [
            "filename" => "unit/req.log"
        ];
        $rlc = new RequestLoggerCreator();
        $logger = $rlc->create($paras);
        assertInstanceOf(LoggerInterface::class, $logger);
        //$logger->debug("");
        $filename = $rlc->getFilename();
        /** @var RotatingFileHandler $handler */
        $handler = $logger->getHandlers()[0];
        $url = $handler->getUrl();
        assertFileExists($url);
        assertStringStartsWith(dirname($url), $filename);
    }

    public function testCreateDefaultFilename() {
        $rlc = new RequestLoggerCreator();
        $logger = $rlc->create();
        assertStringEndsWith(RequestLoggerCreator::FILENAME, $rlc->getFilename());
        /** @var RotatingFileHandler $handler */
        $handler = $logger->getHandlers()[0];
        $url = $handler->getUrl();
        assertStringContainsString("logger/req", $url);
    }

    public function testLevel() {
        $paras = [
            "filename" => "unit/req.log",
            "level" => LogLevel::INFO,
        ];
        $rlc = new RequestLoggerCreator();
        $logger = $rlc->create($paras);
        /** @var RotatingFileHandler $handler */
        $handler = $logger->getHandlers()[0];
        assertEquals(Level::Info, $handler->getLevel());
    }
}

<?php

namespace logger\build;

use bhenk\logger\build\LoggerFactory;
use bhenk\logger\build\LoggerTypes;
use bhenk\logger\log\Log;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;
use function count;
use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFileExists;
use function PHPUnit\Framework\assertInstanceOf;


class LoggerFactoryTest extends TestCase {

    public function testGetConfigFile() {
        $config_file = LoggerFactory::getConfigFile();
        if ($config_file) {
            assertFileExists($config_file);
            $definition = LoggerFactory::getDefinition(LoggerTypes::req);
            assertEmpty($definition);
            $logger = LoggerFactory::getLogger(LoggerTypes::req);
            assertInstanceOf(Logger::class, $logger);
            $definition = LoggerFactory::getDefinition(LoggerTypes::req);
            assertEquals("unit/req.log", $definition["filename"]);
            Log::info("This log statement made according to config file");
        } else {
            $definition = LoggerFactory::getDefinition(LoggerTypes::req);
            assertEmpty($definition);
            $logger = LoggerFactory::getLogger(LoggerTypes::req);
            assertInstanceOf(Logger::class, $logger);
        }
    }

    public function testErrorConfig() {
        $config_file = __DIR__ . DIRECTORY_SEPARATOR . "test_files" . DIRECTORY_SEPARATOR . "error_log_config.php";
        LoggerFactory::setConfigFile($config_file);
        LoggerFactory::setQuiet(true);
        /** @var Logger $logger */
        $logger = LoggerFactory::getLogger(LoggerTypes::req);
        /** @var StreamHandler $handler */
        $handler = $logger->getHandlers()[0];
        assertInstanceOf(StreamHandler::class, $handler);
        $definition = LoggerFactory::getDefinition(LoggerTypes::req);
        assertEquals("foo", $definition["filename_format"]);
    }

    public function testDefaultLogger() {
        /** @var Logger $logger */
        $logger = LoggerFactory::getLogger(LoggerTypes::log);
        assertEquals(2, count($logger->getHandlers()));
    }
}

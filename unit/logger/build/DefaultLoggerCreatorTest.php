<?php

namespace logger\build;

use bhenk\logger\build\DefaultLoggerCreator;
use Exception;
use PHPUnit\Framework\TestCase;
use function dl;
use function PHPUnit\Framework\assertEquals;

class DefaultLoggerCreatorTest extends TestCase {

    public function testCreate() {
        $dlc = new DefaultLoggerCreator();
        $paras = ["log_file" => "unit/logger.log", "err_file" => "unit/error.log"];
        $logger = $dlc->create($paras);
        assertEquals(1, 1);
        $logger->error("testing err", [new Exception("this is a test")]);
        $logger->info("testing info");
    }
}

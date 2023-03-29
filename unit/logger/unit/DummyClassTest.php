<?php

namespace logger\unit;

use bhenk\logger\unit\ConsoleLoggerTrait;
use bhenk\logger\unit\LogAttribute;
use PHPUnit\Framework\TestCase;

#[LogAttribute(false)]
class DummyClassTest extends TestCase {
    use ConsoleLoggerTrait;

    #[LogAttribute(true)]
    public function testLogs() {
        include __DIR__ . DIRECTORY_SEPARATOR . "DummyClass.php";
        $dummy = new DummyClass();
        $dummy->logInfoStatements("foo, bar", "this is a test statement");
        self::assertEquals(1, 1);
    }

    public function testErrorLog() {
        $dummy = new DummyClass();
        $dummy->logErrors();
        self::assertEquals(1, 1);
    }

}

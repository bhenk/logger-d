<?php

namespace logger\unit;

use bhenk\logger\log\Log;
use Exception;
use RuntimeException;

class DummyClass {

    public function logInfoStatements(string ...$statements): void {
        foreach ($statements as $statement) {
            Log::info($statement);
        }
    }

    public function logErrors(): void {
        Log::error("test error", [new Exception("test exception",
            20, new RuntimeException("foo"))]);
    }

}
<?php

/**
 * Bootstrap used by phpunit.
 */
$vendor_autoload = dirname(__DIR__)
    . DIRECTORY_SEPARATOR . "vendor"
    . DIRECTORY_SEPARATOR . "autoload.php";

require_once $vendor_autoload;

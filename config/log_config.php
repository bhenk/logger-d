<?php

return [
    "req" => [
        "channel" => "req",
        "filename" => "unit/req.log",
        "level" => \Psr\Log\LogLevel::DEBUG,
        "max_files" => 2,
        "filename_format" => "{filename}-{date}",
        "filename_date_format" => "Y-m",
        "line_format" => "%datetime% %extra%\n",
    ],
    "log" => [
        "channel" => "log",
        "log_file" => "unit/logger.log",
        "log_max_files" => 5,
        "log_level" => \Psr\Log\LogLevel::INFO,
        "err_file" => "unit/error.log",
        "err_max_files" => 5,
        "err_level" => \Psr\Log\LogLevel::ERROR,
        "format" => "%level_name% | %datetime% | %message% | %context% %extra%\n",
        "date_format" => "Y-m-d H:i:s",
        "introspection" => false,
    ],
    "clt" => [
        "channel" => "clt",
        "level" => \Psr\Log\LogLevel::DEBUG,
        "bubble" => false,
        "white_line" => true,
        "stack_match" => "/(application|src)\/(bhenk|unit)/i",
        "date_format" => "H:i:s:u",
        "exclamation" => "chips!",
        "color_scheme" => "bhenk\logger\handle\ColorSchemeDark",
    ]
];

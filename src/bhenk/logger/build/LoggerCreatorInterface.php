<?php

namespace bhenk\logger\build;

use Psr\Log\LoggerInterface;

/**
 * Defines an interface for classes that are capable of creating loggers
 *
 * The loggers implement {@link LoggerInterface}.
 *
 */
interface LoggerCreatorInterface {

    /**
     * Name of an ancestor child directory expected to be dedicated for logfiles
     */
    const LOG_DIR = "logs";

    /**
     * Creates a logger that implements LoggerInterface
     *
     * @param array $paras array of name-value pairs needed for building the logger.
     * @return LoggerInterface
     */
    function create(array $paras = []): LoggerInterface;

}
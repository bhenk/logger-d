<?php

namespace bhenk\logger\handle;

use Monolog\Handler\AbstractHandler;
use Monolog\Level;
use Monolog\LogRecord;
use Throwable;
use function constant;
use function debug_backtrace;
use function get_class;
use function is_null;
use function preg_match;
use function str_pad;
use function strrpos;
use function strtoupper;
use function substr;


/**
 * Handler class for displaying log output on console.
 */
class ConsoleHandler extends AbstractHandler {

    private static int $count = 0;
    private ColorSchemeInterface $scheme;

    /**
     * Outputs log statements to console.
     *
     * This {@link AbstractHandler handler} is especially equipped to be used during development.
     * See {@link ConsoleLoggerTrait} on how to
     * switch logging to console for a particular TestCase.
     *
     * The {@link $stack_match} expects a regular expression. It can be used to suppress the amount of
     * stacktrace elements of {@link Throwable}\ s. Par example, the regex
     * ``"/application\/(bhenk|unit)/i"`` will only print traces of files that have either
     * ``/application/bhenk`` or ``/application/unit`` in their filename.
     * Defaults to ``"/(.*?)/i"`` - all files.
     *
     * The {@link $date_format} defaults to a short *"H:i:s:u"*.
     *
     * The {@link $color_scheme} points to the (fully qualified) classname of a class implementing the
     * {@link ColorSchemeInterface} and defaults to {@link ColorSchemeDark}, a dark scheme.
     *
     * See also {@link AbstractHandler}.
     *
     * @param int|string|Level $level accepted minimum logging level
     * @param bool $bubble controls the bubbling process of the handler stack
     * @param bool $white_line print empty line above each log statement (default true)
     * @param string|null $stack_match reg-ex to match filenames in stack traces
     * @param string|null $date_format date format for printed log statements
     * @param string|null $exclamation thrown in when a throwable is reported
     * @param string|null $color_scheme color scheme for this handler
     */
    public function __construct(int|string|Level      $level = Level::Debug,
                                bool                  $bubble = false,
                                private readonly bool $white_line = true,
                                private ?string       $stack_match = null,
                                private ?string       $date_format = null,
                                private ?string       $exclamation = null,
                                private ?string       $color_scheme = null
    ) {
        parent::__construct($level, $bubble);
        if (is_null($this->date_format)) $this->date_format = "H:i:s:u";
        if (is_null($this->stack_match)) $this->stack_match = "/(.*?)/i";
        if (is_null($this->exclamation)) $this->exclamation = "chips!";
        if (is_null($this->color_scheme)) $this->color_scheme = ColorSchemeDark::class;
        $this->scheme = new $this->color_scheme;
    }

    /**
     * Get the color scheme used by this class.
     *
     * @return ColorSchemeInterface
     */
    public function getColorScheme(): ColorSchemeInterface {
        return $this->scheme;
    }

    /**
     * Reset the log statement counter
     *
     * @return void
     */
    public function resetCount(): void {
        self::$count = 0;
    }

    /**
     * @inheritDoc
     */
    public function handle(LogRecord $record): bool {
        if (!$this->isHandling($record)) return $this->getBubble();
        $c = $this->color_scheme;

        self::$count += 1;
        $level = strtoupper($record->level->toPsrLogLevel());
        $level_color = constant("$c::" . $level);
        $level = str_pad($level, 9);
        $date = $record->datetime->format($this->date_format);
        $message = $record->message;
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 5);
        $arr_file = $backtrace[3];
        $a_caller = $backtrace[4] ?? null;
        $class = $a_caller["class"] ?? null;
        if (!is_null($class)) $class = substr($class, strrpos($class, "\\") + 1);
        $type = $a_caller["type"] ?? null;
        $function = $a_caller["function"] ?? null;
        $braces = (is_null($function)) ? null : "()";
        $line = $arr_file["line"];

        $row = "$level_color $level " . $c::RESET
            . $c::C_DATE . " $date " . $c::RESET
            . $c::C_CLASS . " [$class$type$function$braces $line] " . $c::RESET
            . "> " . $message . $c::RESET
            . $c::NL;
        $click = $c::C_FILE . "file://" . $arr_file["file"] . ":$line" . $c::RESET . $c::NL;

        fwrite(STDOUT, $c::RESET);
        if ($this->white_line) fwrite(STDOUT, $c::NL);
        fwrite(STDOUT, self::$count . " ");
        fwrite(STDOUT, $row);
        fwrite(STDOUT, $click);

        $this->printArray($record->context, "context", $c);
        $this->printArray($record->extra, "extra", $c);

        fwrite(STDOUT, $c::END);
        return $this->getBubble();
    }

    private function printArray(array $arr, string $word, string $c): void {
        foreach ($arr as $key => $val) {
            $indent = "  ";
            if ($val instanceof Throwable) {
                self::printThrowable($val, $indent, $c);
            } else {
                fwrite(STDOUT, $indent . constant("$c::" . strtoupper("C_" . $word))
                    . " $word: $key => " . $c::RESET
                    . PHP_EOL
                    . $val . $c::RESET . $c::NL);
            }
        }
    }

    private function printThrowable(Throwable $t, string $indent, string $c): void {
        fwrite(STDOUT, $c::T_EXCL . $indent
            . " " . $this->exclamation
            . " " . get_class($t)
            . " [code: " . $t->getCode() . "] "
            . $c::RESET . $c::NL);
        fwrite(STDOUT, $indent . $c::T_BY . " Thrown by:  " . $c::RESET
            . " file://" . $t->getFile() . ":" . $t->getLine()
            . $c::RESET . $c::NL);
        fwrite(STDOUT, $indent . $c::T_MSG . " Message:    " . $c::RESET
            . " " . $t->getMessage() . $c::NL);
        fwrite(STDOUT, $indent . $c::T_STACK . " Stacktrace: " . $c::RESET
            . $c::NL);

        $previous = null;
        foreach (array_reverse($t->getTrace()) as $trace) {

            if (preg_match($this->stack_match, $trace["file"])) {
                fwrite(STDOUT, $indent . "  >  file://"
                    . $trace["file"] . ":"
                    . $trace["line"]
                    . " => " . $previous . "()"
                    . $c::NL);
            }
            $previous = $trace["function"];
        }
        if (!is_null($t->getPrevious())) {
            fwrite(STDOUT, $indent . $c::T_CAUSE . " Caused by:  " . $c::RESET
                . $c::NL);
            $indent = $indent . $indent . $indent;
            $this->printThrowable($t->getPrevious(), $indent, $c);
        }
    }


}
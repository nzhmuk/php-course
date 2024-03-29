<?php

namespace PhpCourseApp\Logger;

class StdoutLogger extends AbstractLogger
{
    protected function log(string $message): void
    {
        echo $message . PHP_EOL;
    }
}

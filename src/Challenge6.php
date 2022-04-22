<?php

declare(strict_types=1);

/*
 * Implement a function that returns true if the input value is a perfect number and false otherwise
 */

namespace PhpCourseApp;

class Challenge6
{
    protected static array $perfectNumbers = [
        6,
        28,
        496,
        8128,
        33550336,
        8589869056,
        137438691328,
        2305843008139952128,
    ];

    public function isPerfect(int $input): bool
    {
        return in_array($input, self::$perfectNumbers);
    }

    public function isPerfectUsage()
    {
        do {
            $inputValue = (int) readline("Enter a number: ");

            echo $inputValue
            , " is "
            , $this->isPerfect($inputValue) ? "a perfect number" : "not a perfect number"
            , PHP_EOL;

            $continueFlag = readline("Enter another number [y/n]:");
        } while ($continueFlag === "y");
    }
}

<?php

declare(strict_types=1);

/*
 * Implement a function that returns true if the input value is a perfect number and false otherwise
 */

namespace PhpCourseApp;

use Exception;

class Challenge7
{
    public function isHappy(string $ticketNumber): bool
    {
        $length = strlen($ticketNumber);
        $firstHalf = 0;
        $secondHalf = 0;

        for ($i = 0; $i < $length; $i++) {
            if ($i < $length / 2) {
                $firstHalf += (int)$ticketNumber[$i];
            } else {
                $secondHalf += (int)$ticketNumber[$i];
            }
        }

        return ($firstHalf === $secondHalf);
    }

    public function isHappyUsage()
    {
        do {
            $inputValue = (string)readline("Enter a number: ");

            if (strlen($inputValue) % 2 !== 0) {
                echo "Length of the input number should be even", PHP_EOL;
            } else {
                echo $inputValue
                , " is "
                , $this->isHappy($inputValue) ? "a happy number :)" : "not a happy number -_-"
                , PHP_EOL;
            }

            $continueFlag = readline("Enter another number [y/n]:");
        } while ($continueFlag === "y");
    }
}

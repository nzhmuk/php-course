<?php

declare(strict_types=1);

/*
 * Implement a function that returns a FizzBuzz sequence
 */

namespace PhpCourseApp;

class Challenge8
{

    public function fizzBuzz(int $start, int $end): array
    {
        $resultArray = [];

        for ($i = $start; $i <= $end; $i++) {
            if ($i % 3 === 0 && $i % 5 != 0) {
                array_push($resultArray, 'Fizz');
            } elseif ($i % 5 === 0 && $i % 3 != 0) {
                array_push($resultArray, 'Buzz');
            } elseif ($i % 3 === 0 && $i % 5 === 0) {
                array_push($resultArray, 'FizzBuzz');
            } else {
                array_push($resultArray, $i);
            }
        }

        return $resultArray;
    }

    public function fizzBuzzUsage()
    {
        do {
            $start = (int)readline("Enter a beginning number for FizzBuzz sequence: ");
            $end = (int)readline("Enter a ending number for FizzBuzz sequence: ");

            $toPrint = $this->fizzBuzz($start, $end);

            echo implode(", ", $toPrint), PHP_EOL;

            $continueFlag = readline("Generate another sequence [y/n]:");
        } while ($continueFlag === "y");
    }
}

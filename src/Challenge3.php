<?php

declare(strict_types=1);

/*
 * Implement a function fib() that returns positive Fibonacci number based on given index number
 */
namespace PhpCourseApp;

use phpDocumentor\Reflection\Types\Self_;

class Challenge3
{
    protected const FIB_0 = 0;
    protected const FIB_1 = 1;

    public function fib(int $index): float
    {
        if ($index === 0) {
            return self::FIB_0;
        }
        if ($index === 1) {
            return self::FIB_1;
        }

        $numberBeforeBefore = self::FIB_0;
        $numberBefore = self::FIB_1;
        $number = 0;

        for ($i = 1; $i < $index; $i++) {
            $number = $numberBefore + $numberBeforeBefore;
            $numberBeforeBefore = $numberBefore;
            $numberBefore = $number;
        }

        return $number;
    }

    public function fibUsage()
    {
        do {
            $inputValue = readline("Enter an index of Fibonacci number: ");

            if (preg_match('/^\\d+$/', $inputValue)) {
                echo "Fibonacci number with index ", $inputValue, " is ", $this->fib((int)$inputValue), PHP_EOL;
            } else {
                throw new \InvalidArgumentException('Oops! The input value is not valid, it should be INT type ');
            };

            $continueFlag = readline("Input another index [y/n]:");
        } while ($continueFlag === "y");
    }
}

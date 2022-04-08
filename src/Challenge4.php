<?php

declare(strict_types=1);

/*
 * Implement a function addDigits() that shrinks argument into single number
 */
namespace PhpCourseApp;

class Challenge4
{
    protected function addDigits(string $number): ?string
    {

        if (strlen($number) === 1) {
              return $number;
        }

        while (strlen($number) > 1) {
            $result = 0;

            $length = strlen($number);

            for ($i = 0; $i < $length; $i++) {
                $result += $number[$i];
            }
            $number = (string)$result;
        }

        return $number;
    }

    public function addDigitsUsage()
    {
        do {
            $inputValue = (string) readline("Enter a number: ");

            echo "Shrank result of the number ", $inputValue, " is ", $this->addDigits($inputValue), PHP_EOL;
            $continueFlag = readline("Enter another number [y/n]:");
        } while ($continueFlag === "y");
    }
}

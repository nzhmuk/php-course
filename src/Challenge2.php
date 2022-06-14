<?php

declare(strict_types=1);

/*
 * Implement function isPowerOfThree(), that defines if the argument is power of 3 or not
 */

namespace PhpCourseApp;

class Challenge2
{
    public function isPowerOfThree(int $number): bool
    {
        if ($number === 1) {
            return true;
        }

        while ($number > 1) {
            $number /= 3;
        }
        return $number === 1;
    }

    public function isPowerOfThreeUsage()
    {
        do {
            $inputValue = readline("Enter any INT number: ");

            if (preg_match('/^\\d+$/', $inputValue)) {
                echo $inputValue, " is power of three - ", $this->isPowerOfThree((int)$inputValue) ? 'true' : 'false', PHP_EOL;
            } else {
                throw new \InvalidArgumentException('Oops! The input value is not valid, it should be INT type ');
            };

            $continueFlag = readline("Check another number [y/n]:");
        } while ($continueFlag === "y");
    }
}

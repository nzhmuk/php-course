<?php
declare(strict_types=1);
/*
 * Implement function isPowerOfThree(), that defines if the argument is power of 3 or not
 */

namespace PhpCourseApp;

class Challenge2
{
    protected function isPowerOfThree(int $number): bool
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
            $inputValue = (int)readline("Enter any INT number: ");

            echo $inputValue, " is power of three - ", $this->isPowerOfThree($inputValue) ? 'true' : 'false', PHP_EOL;
            $continueFlag = readline("Check another number [y/n]:");
        } while ($continueFlag === "y");
    }
}

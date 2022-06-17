<?php

declare(strict_types=1);

/*
 * Implement function isPowerOfThree(), that defines if the argument is power of 3 or not
 */

namespace PhpCourseApp;

use PhpCourseApp\Logger\LoggerInterface;

class Challenge2
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function isPowerOfThree(string $number): bool
    {
        $numberToInt = (int)$number;

        if (preg_match('/^\\d+$/', $number)) {
            if ($numberToInt === 0) {
                return true;
            }

            if ($numberToInt === 1) {
                return true;
            }

            while ($numberToInt > 1) {
                $numberToInt /= 3;
            }
            return $numberToInt === 1;
        } else {
            $this->logger->err(' Oops! The input value is not valid, it should be an integer');
            throw new \InvalidArgumentException('Oops! The input value is not valid, it should be an integer');
        }
    }

    public function isPowerOfThreeUsage()
    {
        do {
            $inputValue = readline("Enter any INT number: ");
            $result = ($this->isPowerOfThree($inputValue) ? 'true' : 'false');
            echo $inputValue, " is power of three - ", $result , PHP_EOL;
            $this->logger->info("$inputValue is power of three - $result");

            $continueFlag = readline("Check another number [y/n]:");
        } while ($continueFlag === "y");
    }
}

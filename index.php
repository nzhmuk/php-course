<?php
declare(strict_types=1);

/*
 * Challenge functions should be called from here
 */

namespace PhpCourseApp;

use PhpCourseApp\Logger\LoggerFactory;

require __DIR__ . '/vendor/autoload.php';
$config = require __DIR__ . '/config.php';

$loggerFactory = new LoggerFactory($config);
$logger = $loggerFactory->createLogger();

$menuScreen = <<<EOT
----------------------------------------------------------------------------------------------------------------------
    Select a challenge:
    1 - Challenge 1. Function binarySum(), accepts 2 binary numbers and return their sum
    2 - Challenge 2. Function isPowerOfThree(), returns (true/false) if a given number is power of 3 or not
    3 - Challenge 3. Function fib(), returns a positive Fibonacci number based on given index
    4 - Challenge 4. Function addDigits() shrinks argument into single number
    5 - Challenge 5. Function isBalanced() validates a string of parenthesis if it is balanced or not
    6 - Challenge 6. Functions isPerfect() returns true if the input number is a perfect number and false otherwise
    7 - Challenge 7. Function isHappy() returns true if the input number is a happy and false otherwise
    8 - Challenge 8. Functions fizzBuzz() generates a sequence of FizzBuzz numbers
----------------------------------------------------------------------------------------------------------------------
    
EOT;

do {
    print_r($menuScreen);

    $challengeNumber = readline("Enter number of a challenge: ");

    switch ($challengeNumber) {
        case 1:
            $task1 = new Challenge1($logger);
            try {
                $task1->binarySumUsage();
            } catch (\Exception $e) {
                echo 'Caught an exception: ',  $e->getMessage(), "\n";
            }
            break;

        case 2:
            $task2 = new Challenge2($logger);
            try {
                $task2->isPowerOfThreeUsage();
            } catch (\Exception $e) {
                echo 'Caught an exception: ',  $e->getMessage(), "\n";
            }
            break;

        case 3:
            $task3 = new Challenge3();
            try {
                $task3->fibUsage();
            } catch (\Exception $e) {
                echo 'Caught an exception: ',  $e->getMessage(), "\n";
            }
            break;

        case 4:
            $task4 = new Challenge4();
            $task4->addDigitsUsage();
            break;

        case 5:
            $task5 = new Challenge5();
            $task5->isBalancedUsage();
            break;

        case 6:
            $task6 = new Challenge6();
            $task6->isPerfectUsage();
            break;

        case 7:
            $task7 = new Challenge7();
            $task7->isHappyUsage();
            break;

        case 8:
            $task8 = new Challenge8();
            $task8->fizzBuzzUsage();
    }

    $continueFlag = readline("Select a challenge once again [y/n]:");
} while ($continueFlag === "y");

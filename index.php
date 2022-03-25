<?php
declare(strict_types=1);

/*
 * Challenge functions should be called from here
 */

require_once "php-course-task-1.php";
require_once "php-course-task-2.php";
require_once "php-course-task-3.php";
require_once "php-course-task-4.php";

$menuScreen = <<<EOT
----------------------------------------------------------------------------------------------------------------------
    Select a challenge:
    1 - Challenge 1. Function binarySum(), accepts 2 binary numbers and return their sum
    2 - Challenge 2. Function isPowerOfThree(), returns (true/false) if a given number is power of 3 or not
    3 - Challenge 3. Function fib(), returns a positive Fibonacci number based on given index
    4 - Challenge 4. Function addDigits(), that shrinks argument into single number
----------------------------------------------------------------------------------------------------------------------
    
EOT;
print_r($menuScreen);
$challengeNumber = readline("Enter number of a challenge: ");

switch ($challengeNumber) {
    case 1:
        // binarySum
        break;

    case 2:
        // isPowerOfThree
        break;

    case 3:
        //fib()
        break;

    case 4:
        $argument = readline("Enter a value for a function addDigits():");
        if ($argument < 0) {
            print_r("Value should be a positive int number");
        } else {
            print_r(addDigits((int)$argument));
        }
        break;
}

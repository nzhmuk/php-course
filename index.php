<?php
declare(strict_types=1);

/*
 * Challenge functions should be called from here
 */

namespace PhpCourseApp;

require_once(__DIR__ . '/src/Challenge1.php');
require_once(__DIR__ . '/src/Challenge2.php');
require_once(__DIR__ . '/src/Challenge3.php');
require_once(__DIR__ . '/src/Challenge4.php');

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
        $task1 = new Challenge1();
        $task1->binarySumUsage();
        break;

    case 2:
        $task2 = new Challenge2();
        $task2->isPowerOfThreeUsage();
        break;

    case 3:
        $task3 = new Challenge3();
        $task3->fibUsage();
        break;

    case 4:
        $task4 = new Challenge4();
        $task4->addDigitsUsage();
        break;
}

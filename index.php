<?php
declare(strict_types=1);

/*
 * Challenge functions should be called from here
 */

$menuScreen = <<<EOT
----------------------------------------------------------------------------------------------------------------------
    Select a challenge:
    1 - Challenge 1. Function binarySum(), accepts 2 binary numbers and return their sum
    2 - Challenge 2. Function isPowerOfThree(), returns (true/false) if a given number is power of 3 or not
    3 - Challenge 3. Function fib(), returns a positive Fibonacci number based on given index
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
}
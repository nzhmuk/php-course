<?php
declare(strict_types=1);

/*
 * Implement a function that validates a string of parenthesis if it is balanced or not
 */

namespace PhpCourseApp;

class Challenge5
{
    protected function isBalanced(string $input): bool
    {
        $length = strlen($input);

        if ($length === 0 || $input[0] === ")" || $input[$length - 1] === "(") {
            return false;
        }

        $counterLeft = 0;
        $counterRight = 0;

        for ($i = 0; $i < $length; $i++) {
            if ($input[$i] === "(") {
                $counterLeft++;
            } elseif ($input[$i] === ")") {
                $counterRight++;
            }
        }

        return $counterLeft === $counterRight;
    }

    public function isBalancedUsage()
    {
        do {
            $inputValue = (string) readline("Enter a string of parenthesis: ");

            echo "The entered string is ", $this->isBalanced($inputValue) ? "balanced" : "not balanced", PHP_EOL;
            $continueFlag = readline("Enter another string [y/n]:");
        } while ($continueFlag === "y");
    }
}

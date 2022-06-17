<?php

/*
 * Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму.
 * Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
*/

namespace PhpCourseApp;

use PhpCourseApp\Logger\LoggerInterface;

class Challenge1
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function binarySum(string $binaryNum1, string $binaryNum2): string
    {
        if ($this->verifyInput($binaryNum1) === false || $this->verifyInput($binaryNum2) === false) {
            $this->logger->err('Oops! One of the input numbers is not a binary');
            throw new \InvalidArgumentException('Oops! One of the input numbers is not a binary ');
        }

        $decimalNum1 = bindec($binaryNum1);
        $decimalNum2 = bindec($binaryNum2);

        $result = decbin($decimalNum1 + $decimalNum2);

        $this->logger->info("Sum $binaryNum1 and $binaryNum2 is $result");

        return $result;
    }

    protected function verifyInput(string $input): bool
    {
        return preg_match('~^[01]+$~', $input);
    }

    public function binarySumUsage()
    {
        do {
            $number1 = readline("Enter a first binary number: ");
            $number2 = readline("Enter a second binary number: ");

            echo "The result of the sum is - ", $this->binarySum($number1, $number2), PHP_EOL;
            $continueFlag = readline("Summarize another binaries [y/n]:");
        } while ($continueFlag === "y");
    }
}

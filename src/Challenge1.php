<?php
/*
 * Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму.
 * Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
*/

namespace PhpCourseApp;

class Challenge1
{
    protected function binarySum(string $binaryNum1, string $binaryNum2): string
    {
        $decimalNum1 = bindec($binaryNum1);
        $decimalNum2 = bindec($binaryNum2);
        return decbin($decimalNum1 + $decimalNum2);
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

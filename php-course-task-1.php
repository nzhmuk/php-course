<?php
/*
 * Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму.
 * Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.
*/

function binarySum($binaryNum1, $binaryNum2)
{
    $decimalNum1 = bindec($binaryNum1);
    $decimalNum2 = bindec($binaryNum2);
    return decbin($decimalNum1 + $decimalNum2);
}

var_dump(binarySum('10', '1')); // 11
var_dump(binarySum('1101', '101')); // 10010

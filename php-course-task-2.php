<?php
declare(strict_types=1);
/*
 * Implement function isPowerOfThree(), that defines if the argument is power of 3 or not
 */

function isPowerOfThree(int $number): bool
{
    if ($number === 1) {
        return true;
    } else {
        $tmp = $number; // можно переменную $tmp вообще выкинуть, оставил для читаемости

        while ($tmp > 1) {
            $tmp = $tmp / 3;
        }
        return $tmp === 1;
    }
}

print_r("1  -  " . (isPowerOfThree(1) ? 'true' : 'false') . "\n");
print_r("3  -  " . (isPowerOfThree(3) ? 'true' : 'false') . "\n");
print_r("4  -  " . (isPowerOfThree(4) ? 'true' : 'false') . "\n");
print_r("27  -  " . (isPowerOfThree(27) ? 'true' : 'false') . "\n");
print_r("28  -  " . (isPowerOfThree(28) ? 'true' : 'false') . "\n");
print_r("0  -  " . (isPowerOfThree(0) ? 'true' : 'false') . "\n");

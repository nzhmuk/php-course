<?php
declare(strict_types=1);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 1);

/*
 * Implement a function addDigits() that shrinks argument into single number
 */

function addDigits(int $number): int
{
    $numberToString = (string)$number;
    $length = strlen($numberToString);
    $result = 0;

    for ($i = 0; $i < $length; $i++) {
        $result = $result + $numberToString[$i];
    }
    return (int)$result;
}

assert(addDigits(0) === 0, 'Oops, Something went wrong!');
assert(addDigits(1) === 1, 'Oops, Something went wrong!');
assert(addDigits(10) === 1, 'Oops, Something went wrong!');
assert(addDigits(100) === 1, 'Oops, Something went wrong!');
assert(addDigits(123) === 6, 'Oops, Something went wrong!');
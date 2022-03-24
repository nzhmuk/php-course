<?php
declare(strict_types=1);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 1);

/*
 * Implement a function fib() that returns positive Fibonacci number based on given index number
 */

const FIB_0 = 0;
const FIB_1 = 1;

function fib(int $index): int
{
    if ($index === 0) {
        return FIB_0;
    }
    if ($index === 1) {
        return FIB_1;
    }

    $numberBeforeBefore = FIB_0;
    $numberBefore = FIB_1;
    $number = 0;

    for ($i = 1; $i < $index; $i++) {
        $number = $numberBefore + $numberBeforeBefore;
        $numberBeforeBefore = $numberBefore;
        $numberBefore = $number;
    }

    return $number;
}

assert(fib(0) === 0, 'Oops! Something went wrong');
assert(fib(1) === 1, 'Oops! Something went wrong');
assert(fib(6) === 8, 'Oops! Something went wrong');
assert(fib(10) === 55, 'Oops! Something went wrong');
assert(fib(16) === 987, 'Oops! Something went wrong');

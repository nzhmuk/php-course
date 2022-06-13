<?php

namespace PhpCourseApp\Tests;

use PHPUnit\Framework\TestCase;

class Challenge3Test extends TestCase
{
    /**
     * @param $num
     * @param $expected
     * @dataProvider fibProvider
     */

    public function testFib(int $num, int $expected): void
    {
        $challenge3 = new \PhpCourseApp\Challenge3();
        self::assertEquals($expected, $challenge3->fib($num));
    }

    public function fibProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [3, 2],
            [5, 5],
            [10, 55],
            [20, 6765],

        ];
    }
}

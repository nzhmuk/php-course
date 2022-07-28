<?php

namespace PhpCourseApp\Tests;

use PHPUnit\Framework\TestCase;

class Challenge6Test extends TestCase
{
    /**
     * @dataProvider isPerfectProvider
     */

    public function testIsPerfect(int $num, bool $expected): void
    {
        $challenge6 = new \PhpCourseApp\Challenge6();
        self::assertEquals($expected, $challenge6->isPerfect($num));
    }

    public function isPerfectProvider(): array
    {
        return [
            [6,true],
            [18, false],
            [2305843008139952128, true],
            [0, false],
            [-1, false],
        ];
    }
}

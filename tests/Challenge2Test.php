<?php

namespace PhpCourseApp\Tests;

use PHPUnit\Framework\TestCase;

class Challenge2Test extends TestCase
{
    /**
     * @dataProvider isPowerOfThreeProvider
     */

    public function testIsPowerOfThree($num, $expected): void
    {
        $challenge2 = new \PhpCourseApp\Challenge2();
        self::assertEquals($expected, $challenge2->isPowerOfThree($num));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            ['1',true],
            ['3',true],
            ['4',false],
            ['9',true],
            ['15',false],
        ];
    }
}

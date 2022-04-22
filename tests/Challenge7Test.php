<?php

namespace PhpCourseApp\Tests;

use PHPUnit\Framework\TestCase;

class Challenge7Test extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */

    public function testIsHappy($num, $expected): void
    {
        $challenge7 = new \PhpCourseApp\Challenge7();
        self::assertEquals($expected, $challenge7->isHappy($num));
    }

    public function isHappyProvider(): array
    {
        return [
            ['00', true],
            ['111222', false],
            ['123321', false],
            ['054702', true],
            ['054703', false],
        ];
    }
}

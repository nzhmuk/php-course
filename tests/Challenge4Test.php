<?php

namespace PhpCourseApp\Tests;

use PHPUnit\Framework\TestCase;

class Challenge4Test extends TestCase
{
    /**
     * @param $num
     * @param $expected
     * @dataProvider addDigitsProvider
     */

    public function testAddDigits(string $num, string $expected): void
    {
        $challenge4 = new \PhpCourseApp\Challenge4();
        self::assertEquals($expected, $challenge4->addDigits($num));
    }

    public function addDigitsProvider(): array
    {
        return [
            ['0', '0'],
            ['1','1'],
            ['123','6'],
            ['39815','8'],
        ];
    }
}

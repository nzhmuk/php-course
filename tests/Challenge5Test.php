<?php

namespace PhpCourseApp\Tests;

use PHPUnit\Framework\TestCase;

class Challenge5Test extends TestCase
{
    /**
     * @dataProvider isBalancedProvider
     */

    public function testIsBalanced($string, $expected): void
    {
        $challenge5 = new \PhpCourseApp\Challenge5();
        self::assertEquals($expected, $challenge5->isBalanced($string));
    }

    public function isBalancedProvider(): array
    {
        return [
            ['(())', true],
            [')()()()',false],
            ['()()()()', true],
        ];
    }
}

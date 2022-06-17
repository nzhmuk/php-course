<?php

namespace PhpCourseApp\Tests;

use PhpCourseApp\Logger\FakeLogger;
use PHPUnit\Framework\TestCase;

class Challenge2Test extends TestCase
{
    /**
     * @dataProvider isPowerOfThreeProvider
     */

    public function testIsPowerOfThree(string $num, bool $expected): void
    {
        $logger = new FakeLogger();
        $challenge2 = new \PhpCourseApp\Challenge2($logger);
        self::assertEquals($expected, $challenge2->isPowerOfThree($num));
    }

    public function isPowerOfThreeProvider(): array
    {
        return [
            ['1', true],
            ['3', true],
            ['4', false],
            ['9', true],
            ['15', false],
            ['0', true],
        ];
    }

    /**
     * @dataProvider isPowerOfThreeInvalidProvider
     */

    public function testIsPowerOfThreeInvalid(string $number): void
    {
        $logger = new FakeLogger();
        $challenge2 = new \PhpCourseApp\Challenge2($logger);
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Oops! The input value is not valid, it should be an integer');
        $challenge2->isPowerOfThree($number);
    }

    public function isPowerOfThreeInvalidProvider(): array
    {
        return [
            ['1.1'],
            ['asdwe'],
            ['-1'],
        ];
    }
}

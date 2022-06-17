<?php

namespace PhpCourseApp\Tests;

use PhpCourseApp\Logger\FakeLogger;
use PhpCourseApp\Logger\StdoutLogger;
use PHPUnit\Framework\TestCase;

class Challenge1Test extends TestCase
{
    /**
     * @dataProvider binarySumProvider
     */

    public function testBinarySum(string $num1, string $num2, string $expected): void
    {
        $logger = new FakeLogger();
        $challenge1 = new \PhpCourseApp\Challenge1($logger);
        self::assertEquals(
            $expected,
            $challenge1->binarySum($num1, $num2)
        );

        self::assertEquals(
            "[INFO]Sum $num1 and $num2 is $expected",
            $logger->getLastMessage()
        );
    }

    public function binarySumProvider(): array
    {
        return [
            ['0','1','1'],
            ['10','1','11'],
            ['1101','101','10010'],
            ['10000000','1','10000001'],
            ['10000000','00000001','10000001'],
            ['0000000','00000','0'],
        ];
    }

    /**
     * @dataProvider binarySumInvalidProvider
     */

    public function testBinarySumInvalid(string $num1, string $num2): void
    {
        $logger = new FakeLogger();
        $challenge1 = new \PhpCourseApp\Challenge1($logger);
        try {
            $challenge1->binarySum($num1, $num2);
        } catch (\Throwable $e) {
            self::assertInstanceOf(\InvalidArgumentException::class, $e);
            self::assertEquals('Oops! One of the input numbers is not a binary ', $e->getMessage());
        }

        self::assertEquals('[ERR]Oops! One of the input numbers is not a binary', $logger->getLastMessage());
    }

    public function binarySumInvalidProvider(): array
    {
        return [
            ['123', '001'],
            ['aaa', '101'],
            ['-10001', '111'],
            ['11.11', '001'],
            ['123', '321'],
        ];
    }
}

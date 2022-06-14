<?php

namespace PhpCourseApp\Tests;

use PHPUnit\Framework\TestCase;

class Challenge1Test extends TestCase
{
    /**
     * @dataProvider binarySumProvider
     */

    public function testBinarySum(string $num1, string $num2, string $expected): void
    {
        $challenge1 = new \PhpCourseApp\Challenge1();
        self::assertEquals($expected, $challenge1->binarySum($num1, $num2));
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
     * @dataProvider binarySumProviderInvalid
     */

    public function testBinarySumInvalid(string $num1, string $num2): void
    {
        $challenge1 = new \PhpCourseApp\Challenge1();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Oops! One of the input numbers is not a binary');
        $challenge1->binarySum($num1, $num2);
    }

    public function binarySumProviderInvalid(): array
    {
        return [
            ['123', '001'],
            ['aaa', '101'],
            ['-10001', '111'],
            ['11.11', '001'],
            ['123', '321']
        ];
    }
}

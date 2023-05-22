<?php

namespace Hexlet\Phpunit\Tests\FillTest;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Fill\fill;

class FillTest extends TestCase
{
    protected array $coll;

    protected function setUp(): void
    {
        $this->coll = [1, 2, 3, 4];
    }

    public function testFill1(): void
    {
        $value = '*';
        $start = 1;
        $end = 3;
        $result = fill($this->coll, $value, $start, $end);
        $expected = [1, '*', '*', 4];
        $this->assertEquals($expected, $result);
    }

    public function testFill2(): void
    {
        $value = '*';
        $result = fill($this->coll, $value);
        $expected = ['*', '*', '*', '*'];
        $this->assertEquals($expected, $result);
    }

    public function testFill3(): void
    {
        $value = '*';
        $start = 4;
        $result = fill($this->coll, $value, $start);
        $expected = [1, 2, 3, 4];
        $this->assertEquals($expected, $result);
    }

    public function testFill4(): void
    {
        $value = '*';
        $start = 0;
        $end = 10;
        $result = fill($this->coll, $value, $start, $end);
        $expected = ['*', '*', '*', '*'];
        $this->assertEquals($expected, $result);
    }

    public function testFill5(): void
    {
        $value = '*';
        $start = 2;
        $end = 2;
        $result = fill($this->coll, $value, $start, $end);
        $expected = [1, 2, 3, 4];
        $this->assertEquals($expected, $result);
    }
}

<?php

namespace Hexlet\Phpunit\Tests\SetTests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Set\set;

class SetTest extends TestCase
{
    protected mixed $coll;

    protected function setUp(): void
    {
        $this->coll = [
            'a' => [
                'b' => [
                    'c' => 3
                ]
            ]
        ];
    }

    public function testSet1(): void
    {
        // Тут идет обращение к свойству
        // тут другая коллекция конкретно для данного теста  и третий аргумент:
        $path = ['a', 'b', 'c'];
        $value = 4;
        $result = set($this->coll, $path, $value);
        // тут что ожидаем:
        $expected = [
            'a' => [
                'b' => [
                    'c' => 4
                ]
            ]
        ];

        $this->assertEquals($expected, $result);
    }

    public function testSet2(): void
    {
        $path = ['x', 'y', 'z'];
        $value = 5;
        $result = set($this->coll, $path, $value);

        $expected = [
            'a' => [
                'b' => [
                    'c' => 3
                ]
            ],
            'x' => [
                'y' => [
                    'z' => 5
                ]
            ]
        ];

        $this->assertEquals($expected, $result);
    }

    public function testSet3(): void
    {
        $path = ['a', 'b', 'd'];
        $value = 5;
        $result = set($this->coll, $path, $value);

        $expected = [
            'a' => [
                'b' => [
                    'c' => 3,
                    'd' => 5
                ]
            ]
        ];

        $this->assertEquals($expected, $result);
    }

    protected function tearDown(): void
    {
        $this->coll = null;
    }
}

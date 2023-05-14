<?php

namespace Hexlet\Phpunit\Tests\StackTest;

use Exception;
use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Stack\make;
use function Hexlet\Phpunit\Stack\push;
use function Hexlet\Phpunit\Stack\pop;
use function Hexlet\Phpunit\Stack\isEmpty;

//use Hexlet\Phpunit\Stack;


class StackTest extends TestCase
{
    public function testMainFlow(): void
    {
        $stack = make();
        // Добавляем два элемента в стек и затем извлекаем их
        push($stack, 'one');
        push($stack, 'two');

        $value1 = pop($stack);
        $this->assertEquals('two', $value1);
        $value2 = pop($stack);
        $this->assertEquals('one', $value2);
    }

    public function testIsEmpty(): void
    {
        $stack = make();
        $this->assertTrue(isEmpty($stack));
        push($stack, 'one');
        $this->assertFalse(isEmpty($stack));
        pop($stack);
        $this->assertTrue(isEmpty($stack));
    }

    public function testPop(): void
    {
        //  Ожидание ставится до вызова кода
        //вызов use Exception наверху, если без него, то синтаксис такой -  $this->expectException(\Exception::class);
        $this->expectException(Exception::class);

        $stack = make();
        pop($stack); // Boom!
    }
}

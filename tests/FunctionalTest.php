<?php

namespace Hexlet\Phpunit\Tests;

//require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Hexlet\Phpunit\Functional;

class FunctionalTest extends TestCase
{
    // Так определяется переменная на уровне класса
    // Ее называют свойством
    // private – закрывает ее от внешнего доступа
    private $coll;

    // Метод ничего не возвращает
    public function setUp(): void
    {
        // Так к переменной происходит доступ внутри класса
        // В данном случае запись данных
        $this->coll = ['One', true, 3, 10, 'cat', [], '', 10, false];
    }

    public function testFilter(): void
    {
        // Тут идет обращение к свойству
        Functional\filter($this->coll, fn($element) => is_numeric($element));
    }

    public function testZip(): void
    {
        // Тут идет обращение к свойству
        // тут другая коллекция конкретно для данного теста:
        $coll2 = ['I', 'II', 'III', 'IV'];
        $result = Functional\zip($this->coll, $coll2);
        // тут что ожидаем:
        $expected = [['One', 'I'], [true, 'II'], [3, 'III'], [10, 'IV']] ;
        $this->assertEquals($expected, $result);
    }
}
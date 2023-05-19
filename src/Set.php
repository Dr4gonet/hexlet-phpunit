<?php

//Напишите тесты для функции set(array $coll, array $path, $value) возвращающей ассоциативный массив,
//в котором она изменяет (или добавляет) значение по указанному пути. Функция изменяет переданный массив.

namespace Hexlet\Phpunit\Set;

function set(array &$coll, array $path, mixed $value): array
{
    $length = count($path);
    $lastIndex = $length - 1;
    $index = 0;
    $nested = &$coll;

    while ($index < $length) {
        $key = $path[$index];
        $newValue = $value;
        if ($index !== $lastIndex) {
            $objValue = $nested[$key] ?? null;
            $newValue = is_array($objValue) ? $objValue : [];
            //  $newValue = [];
        }
        $nested[$key] = $newValue;
        $nested = &$nested[$key];
        $index += 1;
    }
    return $coll;
}

// РАСКОММЕНТИРОВАТЬ ПРИ ЗАПУСКЕ
//$coll = [
 //   'a' => [
 //       'b' => [
 //           'c' => 3
//        ]
 //   ]
//];

//set($coll, ['a', 'b', 'c'], 4);
//print_r($coll);
//=> [
//=>     "a" => [
//=>         "b" => [
//=>             "c" => 4,
//=>         ],
//=>     ],
//=> ]

//set($coll, ['x', 'y', 'z'], 5);
//print_r($coll); // => 5
//=> [
//=>     "a" => [
//=>         "b" => [
//=>             "c" => 4,
//=>          ],
//=>     ],
//=>     "x" => [
//=>         "y" => [
//=>             "z" => 5,
//=>         ],
//=>     ],
//=> ]

<?php

namespace Hexlet\Phpunit\Fill;

function fill(array &$coll, mixed $value, int $start = 0, int $end = null): array
{
    if ($end === null) {
        $end = count($coll);
    }


    for ($i = $start; $i < $end && $i < count($coll); $i += 1) {
        $coll[$i] = $value;
    }
    return $coll;
}


//print_r(fill([1, 2, 3, 4], '*', 1, 3));

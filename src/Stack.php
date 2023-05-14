<?php

namespace Hexlet\Phpunit\Stack;

function make(): array
{
    return [];
}

function isEmpty(array $stack): bool
{
    return count($stack) === 0;
}

function push(array &$stack, mixed $element): void
{
    array_push($stack, $element);
}

function pop(array &$stack): array
{
    if (isEmpty($stack)) {
        throw new \Exception("Stack is empty!");
    }
    return array_pop($stack);
}

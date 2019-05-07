<?php

declare(strict_types=1);

namespace Exercises\Stack;

/**
 * Create a Stack.
 *
 * When stack is empty pop and peek methods should return null.
 *
 * @method void push(mixed $value)
 * @method mixed|null pop()
 * @method mixed|null peek()
 * @example $queue = new Stack();
 * $queue->push(1);
 * $queue->push(2);
 * $queue->peek() === 1;
 * $queue->pop() === 1;
 */
final class Stack
{
    private $stack = [];

    public function push($value):void
    {
        $this->stack[] = $value;
    }

    public function pop()
    {
        if (!empty($this->stack)) {
            return array_pop($this->stack);
        }
        return null;
    }

    public function peek()
    {
        if (!empty($this->stack)) {
            return end($this->stack);
        }
        return null;
    }
}

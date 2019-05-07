<?php

declare(strict_types=1);

namespace Exercises\Numbers;

/**
 * @method static int add(int $n) add numbers from 1 up to $n including.
 * @example Numbers::add(3) === 6
 */
final class Numbers
{
    /**
     * @param int $n
     * @return int
     */
    public static function add(int $n):int
    {
        $result = 0;

        for ($i = 1; $i <= $n; $i++) {
            $result += $i;
        }

        return $result;
    }
}

<?php

declare(strict_types=1);

namespace Exercises\Ladder;

/**
 * Print a ladder.
 *
 * @method static void print(int $level)
 * @example Ladder::print(3)  -> '#  '
 *                               '## '
 *                               '###'
 */
final class Ladder
{
    public static function print(int $level): void
    {
        for ($i = 1; $i <= $level; $i++) {
            echo self::symbols($i) . self::spaces($level - $i);
        }
    }
    /**
     * @param int $n
     * @return string
     */
    private static function symbols($n):string {
        $symbols = '';

        for ($i = 0; $i < $n; $i++) {
            echo '#';
        }

        return $symbols;
    }
    /**
     * @param int $n
     * @return string
     */
    private static function spaces(int $n):string
    {
        $spaces = '';

        for ($i = 0; $i < $n; $i++) {
            echo ' ';
        }

        return $spaces;
    }
}

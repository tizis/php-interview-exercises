<?php

declare(strict_types=1);

namespace Exercises\FizzBuzz;

/**
 * Print numbers from 1 to n.
 * When n is divisible by 3 echo 'fizz'.
 * When n is divisible by 5 echo 'buzz.
 * When n is divisible by both 3 and 5 echo 'fizzbuzz'.
 *
 * @method static void print(int $limit)
 * @example FizzBuzz::print('5') -> 1, 2, 'fizz', 4, 'buzz'
 */
final class FizzBuzz
{
    private const DIVISIBLE_WORDS = [
        3 => 'fizz',
        5 => 'buzz'
    ];

    public static function print(int $limit): void
    {
        for ($i = 1; $i <= $limit; $i++) {
            $canDivisible = self::canDivisible($i);
            echo $canDivisible ?? (string)$i;
        }
    }

    /**
     * @param int $int
     * @return null|string
     */
    private static function canDivisible(int $int): ?string
    {
        $response = null;

        foreach (self::DIVISIBLE_WORDS as $divider => $replaceWord) {
            $remainder = $int % $divider;
            if ($remainder === 0) {
                $response .= $replaceWord;
            }
        }

        return $response;
    }
}

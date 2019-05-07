<?php

declare(strict_types=1);

namespace Exercises\MaxSubArraySum;

/**
 * Find out largest sum of $n numbers in $input array.
 *
 * @method static int max(int[] $input, int $n)
 * @example MaxSubArraySum::max([1, 2, 3], 2)) === 5
 * @example MaxSubArraySum::max([2, 6, 9, 2, 1, 8, 5, 6, 3], 3)) === 19
 */
final class MaxSubArraySum
{
    public static function max(array $input, int $n): int
    {
        $sum = 0;
        $input = self::sortInput($input);

        if (count($input) >= $n) {
            for ($i = 0; $i < $n; $i++) {
                var_dump($input);
                $sum += array_pop($input);
            }
        }

        return $sum;
    }

    /**
     * @param $input
     * @return array
     */
    private static function sortInput(array $input): array
    {
        asort($input);
        return $input;
    }
}

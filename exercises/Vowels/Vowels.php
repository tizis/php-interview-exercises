<?php

declare(strict_types=1);

namespace Exercises\Vowels;

/**
 * Count string vowels (aeiou).
 *
 * @method static int count(string $string)
 * @example Vowels::count('Hello!')  === 2
 * @example Vowels::count('Why?')  === 0
 */
final class Vowels
{

    private const VOWELS = [
        'a', 'u', 'e', 'i', 'o'
    ];

    /**
     * @param string $string
     * @return int
     */
    public static function count(string $string): int
    {
        $vowels = array_filter(str_split(strtolower($string)), function ($char) {
            return in_array($char, self::VOWELS, true);
        });
        return count($vowels);
    }
}

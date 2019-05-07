<?php

declare(strict_types=1);

namespace Exercises\Anagram;

/**
 * Two strings are anagrams if same characters are used in both.
 * Only case insensitive characters, not spaces or punctuation should be counted.
 *
 * @method static bool check(string $first, string $second)
 * @example Anagram::check('rail safety', 'fairy tales') === true
 * @example Anagram::check('roast beef', 'goat roast') === false
 * @example Anagram::check('Elvis, 'lives') === true
 */
final class Anagram
{
    /**
     * @param string $first
     * @param string $second
     * @return bool
     */
    public static function check(string $first, string $second): bool
    {
        $first = self::normalize($first);
        $second = self::normalize($second);

        if (self::symbolsCountMismatch($first, $second)) {
            return false;
        }

        $firstArray = str_split($first);
        $secondArray = str_split($second);

        return empty(array_diff($firstArray, $secondArray));
    }

    /**
     * @param string $first
     * @param string $second
     * @return bool
     */
    private static function symbolsCountMismatch(string $first, string $second): bool
    {
        return count(str_split($first)) !== count(str_split($second));
    }

    /**
     * @param string $string
     * @return string
     */
    private static function normalize(string $string): string
    {
        return strtolower(preg_replace('/[^a-z]/i', '', $string));
    }
}

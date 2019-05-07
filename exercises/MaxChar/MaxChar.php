<?php

declare(strict_types=1);

namespace Exercises\MaxChar;

/**
 * Find the most used character.
 *
 * @method static string get(string $string)
 * @example MaxChar::get('qqweqrty')  === 'q'
 * @example MaxChar::get('apple 2202')  === '2'
 */
final class MaxChar
{
    /**
     * @param string $string
     * @return string
     */
    public static function get(string $string): string
    {
        $string = self::normalize($string);
        $charsFrequency = [];

        foreach (str_split($string) as $char) {

            if ($charsFrequency[$char]) {
                ++$charsFrequency[$char];
            } else {
                $charsFrequency[$char] = 1;
            }

        }

        // key to value swap
        $charsFrequency = array_flip($charsFrequency);
        $maxFrequencyElementIndex = max(array_keys($charsFrequency));

        return (string)$charsFrequency[$maxFrequencyElementIndex];
    }

    /**
     * @param string $string
     * @return string
     */
    private static function normalize(string $string): string
    {
        return str_replace(' ', '', $string);
    }
}

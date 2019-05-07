<?php

declare(strict_types=1);

namespace Exercises\Palindrome;

/**
 * Palindrome is a string that equals itself when reversed.
 * Non-alpha chars must also be included.
 *
 * @method static bool check(string $string)
 * @example Palindrome::check('asddsa')  === true
 * @example Palindrome::check('asdd')  === false
 */
final class Palindrome
{
    /**
     * @param string $string
     * @return bool
     */
    public static function check(string $string):bool {
        $originalString = str_split($string);
        $reverseString = array_reverse($originalString);
        // linear array differences
        return empty(array_diff_assoc($originalString, $reverseString));
    }
}

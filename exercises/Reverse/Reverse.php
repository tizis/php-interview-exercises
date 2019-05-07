<?php

declare(strict_types=1);

namespace Exercises\Reverse;

/**
 * Create methods that reverse given input by its positions.
 *
 * @method static int int(int $number)
 * @method static string string(string $string)
 * @example Reverse::int(12) === 21
 * @example Reverse::int(912) === 219
 * @example Reverse::int(120) === 21
 * @example Reverse::int(-12) === -21
 * @example Reverse::int(-120) === -21
 * @example Reverse::string('qwerty')  === 'ytrewq'
 * @example Reverse::string('apple')  === 'elppa'
 */
final class Reverse
{
    /**
     * @param int $number
     * @return Int
     */
    public static function int(int $number): Int
    {
        $isNegativeInt = self::isNegativeInt($number);
        $numbers = self::numbersMap($number);
        $response = '';

        foreach ($numbers as $reverseSubNumber) {
            $response .= $reverseSubNumber;
        }

        if ($isNegativeInt) {
            $response *= -1;
        }

        return (int)$response;
    }

    /**
     * @param $number
     * @return array
     */
    public static function numbersMap($number): array
    {
        return array_reverse(array_filter(str_split((string)$number), function ($subNumber) {
            // if (int) make all non integer chars is zero
            return !((int)$subNumber === 0);
        }));
    }

    /**
     * @param int $int
     * @return bool
     */
    public static function isNegativeInt(int $int): bool
    {
        return $int < 0;
    }

    /**
     * @param string $string
     * @return string
     */
    public static function string(string $string): string
    {
        $response = '';
        foreach (self::stringMap($string) as $char) {
            $response .= $char;
        }

        return $response;
    }

    /**
     * @param string $string
     * @return array
     */
    public static function stringMap(string $string): array
    {
        return array_reverse(str_split($string));
    }
}

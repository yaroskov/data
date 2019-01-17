<?php

namespace Yaroskov\Data;

use Yaroskov\Data\Components\ArrayToArray;
use Yaroskov\Data\Components\ArrayKeyCheck;
use Yaroskov\Data\Components\CheckByArray;
use Yaroskov\Data\Components\Debugger;
use Yaroskov\Data\Components\RemoveEndOfLine;
use Yaroskov\Data\Components\RemoveStartOfLine;
use Yaroskov\Data\Components\ToUnicode;

class Data
{
    /**
     * @param array $array
     * @param array $add
     * @return array
     */
    public static function ArrayToArray(array $array, array $add): array
    {
        return ArrayToArray::get($array, $add);
    }

    /**
     * @param string $key
     * @param array $array
     * @return string
     */
    public static function arrayKeyCheck(string $key, array $array): string
    {
        return ArrayKeyCheck::get($key, $array);
    }

    /**
     * @param string $string
     * @param array $options
     * @return string
     */
    public static function checkByArray(string $string, array $options): string
    {
        return CheckByArray::get($string, $options);
    }

    /**
     * @param array $input
     * @return string
     */
    public static function debugger(array $input): string
    {
        return Debugger::get($input);
    }

    /**
     * @param string $string
     * @param string $searchWord
     * @return string
     */
    public static function removeEndOfLine(string $string, string $searchWord): string
    {
        return RemoveEndOfLine::get($string, $searchWord);
    }

    /**
     * @param string $string
     * @param string $searchWord
     * @return string
     */
    public static function removeStartOfLine(string $string, string $searchWord): string
    {
        return RemoveStartOfLine::get($string, $searchWord);
    }

    /**
     * @param string $sequence
     * @return string
     */
    public static function toUnicode(string $sequence): string
    {
        return ToUnicode::get($sequence);
    }
}
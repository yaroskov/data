<?php

namespace Yaroskov\Data\Components;

class ArrayKeyCheck
{
    /**
     * @param string $key
     * @param array $array
     * @return string
     */
    public static function get(string $key, array $array): string
    {
        return array_key_exists($key, $array) ? $array[$key] : '';
    }
}
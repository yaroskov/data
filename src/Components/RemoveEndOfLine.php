<?php

namespace Yaroskov\Data\Components;

class RemoveEndOfLine
{
    /**
     * @param string $string
     * @param string $searchWord
     * @return string
     */
    public static function get(string $string, string $searchWord): string
    {
        $startPosition = mb_strpos($string, $searchWord) + mb_strlen($searchWord);
        $result = mb_substr($string, $startPosition);

        return $result;
    }
}
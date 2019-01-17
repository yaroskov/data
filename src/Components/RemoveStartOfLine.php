<?php

namespace Yaroskov\Data\Components;

class RemoveStartOfLine
{
    /**
     * @param string $string
     * @param string $searchWord
     * @return string
     */
    public static function get(string $string, string $searchWord): string
    {
        $results = $string;
        $searchWordPosition = mb_strpos($string, $searchWord);

        if ($searchWordPosition != false) {
            $deleteWord = mb_substr($string, $searchWordPosition);
            $results = str_replace($deleteWord, '', $string);
        }

        return $results;
    }
}
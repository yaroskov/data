<?php

namespace Yaroskov\Data\Components;

class CheckByArray
{
    /**
     * @param string $string
     * @param array $options
     * @return string
     */
    public static function get(string $string, array $options): string
    {
        $result = '';
        foreach ($options as $option) {
            if (mb_strpos($string, $option) !== false) {
                $result = $option;
                break;
            }
        }

        return $result;
    }
}
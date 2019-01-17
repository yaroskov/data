<?php

namespace Yaroskov\Data\Components;

class ArrayToArray
{
    /**
     * @param array $array
     * @param array $add
     * @return array
     */
    public static function get(array $array, array $add): array
    {
        foreach ($add as $addElement) {
            $array[] = $addElement;
        }

        return $array;
    }
}
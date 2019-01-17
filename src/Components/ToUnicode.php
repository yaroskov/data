<?php

namespace Yaroskov\Data\Components;

class ToUnicode
{
    /**
     * @param string $sequence
     * @return string
     */
    public static function get(string $sequence): string
    {
        return json_decode('["' . $sequence . '"]')[0];
    }
}
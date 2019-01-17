<?php

namespace Yaroskov\Data\Components;

class Debugger
{
    /**
     * @param array $input
     * @return string
     */
    public static function get(array $input): string
    {
        return "<pre>" . print_r($input) . "</pre>";
    }
}
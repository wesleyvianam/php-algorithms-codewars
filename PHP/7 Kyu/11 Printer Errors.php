<?php

declare(strict_types=1);

// https://www.codewars.com/kata/56541980fa08ab47a0000040/train/php

function printerError(string $s)
{
    $colorPalette = ['a', 'b', 'h', 'i', 'j', 'm'];
    $cont = 0;
    $str = str_split(strtolower($s));
    $str = array_unique($str);
    foreach ($str as $color) {
        if (!in_array($color, $colorPalette)) {
            $cont++;
        }
    }
    $result = $cont . '/' . count($str);
    return $result;
}

echo printerError('kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz');
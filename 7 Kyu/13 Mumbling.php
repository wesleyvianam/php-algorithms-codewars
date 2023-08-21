<?php

/*

This time no story, no theory. The examples below show you how to write function accum:

Examples:
    accum("abcd") -> "A-Bb-Ccc-Dddd"
    accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
    accum("cwAt") -> "C-Ww-Aaa-Tttt"

The parameter of accum is a string which includes only letters from a..z and A..Z.

*/

function accum($str) {
    $result = [];

    foreach (str_split($str) as $key => $s) {
        $result[] = strtoupper($s) . str_repeat($s, $key);
    }

    return implode('-', $result);
}

echo accum("asds");
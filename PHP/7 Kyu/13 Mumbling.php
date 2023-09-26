<?php

// Kata Training: https://www.codewars.com/kata/5667e8f4e3f572a8f2000039/train/php

function accum($str) {
    $result = [];

    foreach (str_split($str) as $key => $s) {
        $result[] = strtoupper($s) . strtolower(str_repeat($s, $key));
    }

    return implode('-', $result);
}

echo accum("asds");
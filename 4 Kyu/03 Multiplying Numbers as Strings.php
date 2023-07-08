<?php

// Kata Training: https://www.codewars.com/kata/55911ef14065454c75000062/train/php

function multiply(string $a, string $b): string {
    $a = array_reverse(str_split(ltrim($a, '0')));
    $b = array_reverse(str_split(ltrim($b, '0')));
    $r = [];

    foreach ($a as $ai => $av) {
        foreach ($b as $bi => $bv) {
            $m = $av * $bv;
            $r[$ai + $bi] += $m;
            if ($r[$ai + $bi] >= 10) {
                $r[$ai + $bi + 1] += floor($r[$ai + $bi] / 10);
                $r[$ai + $bi] = $r[$ai + $bi] % 10;
            }
        }
    }

    return implode('', array_reverse($r));
}

echo multiply("1020303004875647366210", "2774537626200857473632627613");
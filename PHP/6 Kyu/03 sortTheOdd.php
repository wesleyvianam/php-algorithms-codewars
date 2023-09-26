<?php

// Kata Training: https://www.codewars.com/kata/578aa45ee9fd15ff4600090d/train/php

function sortArray(array $arr): array 
{
    $odds = array_filter($arr, function ($n) {return $n % 2 != 0; });

    sort($odds);

    return array_map(function ($n) use (&$odds) {
        if ($n % 2 == 0) return $n;
        return array_shift($odds);
    }, $arr);
}

echo sortArray([5, 3, 2, 8, 1, 4]);

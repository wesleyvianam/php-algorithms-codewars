<?php

/*

You will be given an array of numbers. You have to sort the odd numbers in ascending
order while leaving the even numbers at their original positions.

Examples
[7, 1]  =>  [1, 7]
[5, 8, 6, 3, 4]  =>  [3, 8, 6, 5, 4]
[9, 8, 7, 6, 5, 4, 3, 2, 1, 0]  =>  [1, 8, 3, 6, 5, 4, 7, 2, 9, 0]

Kata Training: https://www.codewars.com/kata/578aa45ee9fd15ff4600090d/train/php

*/

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

<?php

//declare(strict_types=1);

/*

Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

Return your answer as a number.

Kata Training: https://www.codewars.com/kata/57eaeb9578748ff92a000009/train/php

*/

function sum_mix(array $arr): float
{
    return array_sum($arr);
}

$arr = [9, 3, '7', '3.2'];

echo sum_mix($arr);
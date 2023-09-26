<?php

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/57eaeb9578748ff92a000009/train/php

function sum_mix(array $arr): float
{
    return array_sum($arr);
}

$arr = [9, 3, '7', '3.2'];

echo sum_mix($arr);
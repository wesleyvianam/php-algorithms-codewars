<?php

// Kata Training: https://www.codewars.com/kata/55d24f55d7dd296eb9000030/train/php

function summation(int $n): int
{
    return array_sum(range(1, $n));
}

echo summation(5);
<?php

// Kata Training: https://www.codewars.com/kata/55f9b48403f6b87a7c0000bd/train/php

function paperwork(int $n, int $m): int
{
    return $n < 0 || $m < 0 
        ? 0 
        : $n * $m;
}

echo paperwork(-5,5);
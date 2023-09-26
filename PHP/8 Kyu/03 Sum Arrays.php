<?php 

declare(strict_types=1);

// https://www.codewars.com/kata/53dc54212259ed3d4f00071c/train/php

function sum(array $a): float 
{
    return array_sum($a);
}

echo sum([1, 5.2, 4, 0, -1]);

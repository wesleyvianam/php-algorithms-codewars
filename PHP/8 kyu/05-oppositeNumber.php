<?php

declare(strict_types=1);

/*

Very simple, given an integer or a floating-point number, find its opposite.

Kata Training: https://www.codewars.com/kata/56dec885c54a926dcd001095/train/php

*/

function opposite($n)
{
    return -$n;
}

echo opposite(34.5);
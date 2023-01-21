<?php

declare(strict_types=1);

/*

There is an array with some numbers. All numbers are equal except for one. Try to find it!

findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55

Kata training: https://www.codewars.com/kata/585d7d5adb20cf33cb000235/train/php

*/

function find_uniq($a)
{
    sort($a);
    return ($a[0] === $a[1]) ? end($a) : current($a);
}


echo find_uniq([-231, -231, -312, -231, -231, -231]);
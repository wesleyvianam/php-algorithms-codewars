<?php

declare(strict_types=1);

// Kata training: https://www.codewars.com/kata/585d7d5adb20cf33cb000235/train/php

function find_uniq($a)
{
    sort($a);
    return ($a[0] === $a[1]) ? end($a) : current($a);
}


echo find_uniq([-231, -231, -312, -231, -231, -231]);
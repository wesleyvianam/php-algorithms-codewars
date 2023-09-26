<?php

// Kata Training: https://www.codewars.com/kata/563a631f7cbbc236cf0000c2/train/php

function move(int $pos, int $roll): int
{
    return $pos + ($roll * 2);
}

echo move(2, 5);
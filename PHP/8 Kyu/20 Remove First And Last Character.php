<?php

// Kata Training: https://www.codewars.com/kata/56bc28ad5bdaeb48760009b0/train/php

function remove_char(string $s): string
{
    if (strlen($s) < 2) {return $s;}
    return substr($s, 1,  -1);
}

echo remove_char("eloquent");
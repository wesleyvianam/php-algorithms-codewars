<?php

/*

It's pretty straightforward. Your goal is to create a function that removes the
first and last characters of a string. You're given one parameter, the original
string. You don't have to worry with strings with less than two characters.

KATA TRAINING: https://www.codewars.com/kata/56bc28ad5bdaeb48760009b0/train/php

*/

function remove_char(string $s): string
{
    if (strlen($s) < 2) {return $s;}
    return substr($s, 1,  -1);
}

echo remove_char("eloquent");
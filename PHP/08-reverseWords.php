<?php

declare(strict_types=1);

/*

Complete the function that accepts a string parameter, and reverses each word in the string.
All spaces in the string should be retained.

Kata Training: https://www.codewars.com/kata/5259b20d6021e9e14c0010d4/train/php

*/

function reverseWords(string $str): string
{
    return implode(' ', array_reverse(explode(' ', strrev($str))));
}

echo reverseWords("Ola mundo!");
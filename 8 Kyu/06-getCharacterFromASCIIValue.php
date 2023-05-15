<?php

declare(strict_types=1);

/*

Write a function get_char() / getChar() which takes a number and returns the corresponding ASCII char for that value.

Example:
    input 65 => output 'A'

Kata training: https://www.codewars.com/kata/55ad04714f0b468e8200001c/train/php

*/

function getChar(int $number): string
{
  return chr($number);
}

echo getChar(66);
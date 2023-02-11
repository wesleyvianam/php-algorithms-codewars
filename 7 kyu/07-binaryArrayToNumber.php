<?php

declare(strict_types=1);

/*

Given an array of ones and zeroes, convert the equivalent binary value to an integer.

Eg: [0, 0, 0, 1] is treated as 0001 which is the binary representation of 1.

Examples:

Testing: [0, 0, 0, 1] ==> 1
Testing: [0, 0, 1, 0] ==> 2
Testing: [0, 1, 0, 1] ==> 5

Kata training: https://www.codewars.com/kata/578553c3a1b8d5c40300037c/train/php

*/

function binaryArrayToNumber(array $arr): int
{
    return bindec(implode($arr));
}

echo binaryArrayToNumber([0,1,0,1]);
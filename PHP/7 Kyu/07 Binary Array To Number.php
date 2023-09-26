<?php

declare(strict_types=1);

// Kata training: https://www.codewars.com/kata/578553c3a1b8d5c40300037c/train/php

function binaryArrayToNumber(array $arr): int
{
    return bindec(implode($arr));
}

echo binaryArrayToNumber([0,1,0,1]);
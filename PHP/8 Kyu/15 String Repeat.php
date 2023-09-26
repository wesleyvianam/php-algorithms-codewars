<?php

// Kata Training: https://www.codewars.com/kata/57a0e5c372292dd76d000d7e/train/php

function repeatStr(int $n, string $str): string
{
    return str_repeat($str, $n);
}

echo repeatStr(3, "*");
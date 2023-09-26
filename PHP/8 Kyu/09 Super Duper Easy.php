<?php

// Kata Training: https://www.codewars.com/kata/55a5bfaa756cfede78000026/train/php

function problem(int $x): int
{
    return ctype_alpha($x) ? 'Error' : ($x * 50) + 6;
}

ECHO problem(1);
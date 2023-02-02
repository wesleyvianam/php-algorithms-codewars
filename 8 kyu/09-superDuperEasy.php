<?php

/*

Make a function that returns the value multiplied by 50 and increased by 6. If the value entered is a string it should return "Error".

Kata Training: https://www.codewars.com/kata/55a5bfaa756cfede78000026/train/php

*/

function problem($x): int
{
    return ctype_alpha($x) ? 'Error' : ($x * 50) + 6;
}

ECHO problem(1);
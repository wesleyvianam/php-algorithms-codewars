<?php

// Kata Training: https://www.codewars.com/kata/577bd026df78c19bca0002c0/train/php

function correct(string $string): string
{
    return str_replace(["5","0","1"], ["S","O","I"], $string);
}

echo correct("51NGAP0RE");

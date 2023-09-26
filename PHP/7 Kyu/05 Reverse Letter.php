<?php 

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/58b8c94b7df3f116eb00005b/train/php

function reverseLetter(string $str): string
{
    return strrev(preg_replace("/[^a-z]/", '', $str));
}

echo reverseLetter("ultr53o?n");
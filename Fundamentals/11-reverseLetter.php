<?php 

declare(strict_types=1);

/*

# Task
Given a string str, reverse it and omit all non-alphabetic characters.

# Example
For str = "krishan", the output should be "nahsirk".
For str = "ultr53o?n", the output should be "nortlu".

Kata Training: https://www.codewars.com/kata/58b8c94b7df3f116eb00005b/train/php

*/

function reverseLetter(string $str): string
{
    return strrev(preg_replace("/[^a-z]/", '', $str));
}

echo reverseLetter("ultr53o?n");
<?php

/*

Write a program that finds the summation of every number from 1 to num. The number will always be a positive integer greater than 0.

Kata Training: https://www.codewars.com/kata/55d24f55d7dd296eb9000030/train/php

function: range();
- create an array containing a range of elements.

*/

function summation(int $n): int
{
    return array_sum(range(1, $n));
}

echo summation(5);
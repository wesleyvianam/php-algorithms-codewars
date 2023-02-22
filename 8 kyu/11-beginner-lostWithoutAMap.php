<?php

/*

Given an array of integers, return a new array with each value doubled.

Kata Training: https://www.codewars.com/kata/57f781872e3d8ca2a000007e/train/php

*/

function maps(array $n): array
{
  return array_map(function($n){return $n * 2;}, $x);
}

echo maps([1,5,9]);
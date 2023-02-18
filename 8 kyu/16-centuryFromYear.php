<?php

/*

Introduction
The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.

Task
Given a year, return the century it is in.

Examples
1705 --> 18
1900 --> 19
1601 --> 17
2000 --> 20

Kata Training: https://www.codewars.com/kata/57a0e5c372292dd76d000d7e/train/php

*/

function centuryFromYear($year): int
{
  return ceil($year / 100);
}

echo centuryFromYear(2001);
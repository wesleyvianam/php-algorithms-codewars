<?php

/*

If you can't sleep, just count sheep!!

Task:
Given a non-negative integer, 3 for example, return a string with a murmur: 
"1 sheep...2 sheep...3 sheep...". Input will always be valid, i.e. no negative integers.

Kata Training: https://www.codewars.com/kata/5b077ebdaf15be5c7f000077/train/php

*/

function countsheep(int $num): string
{
  $result = [];
  for ($i = 1; $i <= $num; $i++) {
    array_push($result, $i . ' sheep...'); 
  }

  return implode($result);
} 

echo countsheep(5);
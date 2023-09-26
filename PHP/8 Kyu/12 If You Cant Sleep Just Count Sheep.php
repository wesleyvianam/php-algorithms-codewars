<?php

// Kata Training: https://www.codewars.com/kata/5b077ebdaf15be5c7f000077/train/php

function countsheep(int $num): string
{
  $result = [];
  for ($i = 1; $i <= $num; $i++) {
    array_push($result, $i . ' sheep...'); 
  }

  return implode($result);
} 

echo countsheep(5);
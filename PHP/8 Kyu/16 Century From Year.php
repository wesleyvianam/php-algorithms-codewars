<?php

// Kata Training: https://www.codewars.com/kata/57a0e5c372292dd76d000d7e/train/php

function centuryFromYear(int $year): int
{
  return ceil($year / 100);
}

echo centuryFromYear(2001);
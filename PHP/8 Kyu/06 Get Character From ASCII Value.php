<?php

declare(strict_types=1);

// Kata training: https://www.codewars.com/kata/55ad04714f0b468e8200001c/train/php

function getChar(int $number): string
{
  return chr($number);
}

echo getChar(66);
<?php

declare(strict_types=1);

// https://www.codewars.com/kata/54ff3102c1bad923760001f3/train/php

function getCount(string $str): int
{
  return preg_match_all('/[aeiou]/i', $str);
}

echo getCount('abracadabra');

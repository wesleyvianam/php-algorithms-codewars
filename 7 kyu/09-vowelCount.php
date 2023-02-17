<?php

declare(strict_types=1);

/*

Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.

*/

function getCount($str): int
{
  return preg_match_all('/[aeiou]/i', $str);
}

echo getCount('abracadabra');

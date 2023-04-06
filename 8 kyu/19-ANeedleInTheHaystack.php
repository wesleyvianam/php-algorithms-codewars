<?php

/*

Can you find the needle in the haystack?

Write a function findNeedle() that takes an array full of junk but containing one "needle"

After your function finds the needle it should return a message (as a string) that says:

"found the needle at position " plus the index it found the needle, so:

Example(Input --> Output)

Kata Training: https://www.codewars.com/kata/56676e8fabd2d1ff3000000c/train/php

*/

function findNeedle(array $haystack): string
{
    return "found the needle at position " . array_search("needle", $haystack);
}

echo findNeedle(['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false]);

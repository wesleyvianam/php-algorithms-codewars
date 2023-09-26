<?php

// Kata Training: https://www.codewars.com/kata/56676e8fabd2d1ff3000000c/train/php

function findNeedle(array $haystack): string
{
    return "found the needle at position " . array_search("needle", $haystack);
}

echo findNeedle(['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false]);

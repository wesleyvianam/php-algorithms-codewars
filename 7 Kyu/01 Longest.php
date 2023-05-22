<?php

// https://www.codewars.com/kata/5656b6906de340bd1b0000ac/train/php

function longest(string $a, string $b): string
{
    $letters = array_unique(str_split($a .= $b));
    asort($letters);
    return implode('', $letters);
}

echo longest("aretheyhere", "yestheyarehere");


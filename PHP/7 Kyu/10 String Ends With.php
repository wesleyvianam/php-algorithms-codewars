<?php

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/51f2d1cafc9c0f745c00037d/train/php

function solution($str, $ending): bool
{   
    return str_ends_with($str, $ending);
}

echo solution("abc\n", 'abc');
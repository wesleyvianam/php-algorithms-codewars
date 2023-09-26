<?php

// Kata Training: https://www.codewars.com/kata/5506b230a11c0aeab3000c1f/train/php

function evaporator(int $content, int $evapPerDay, int $threshold): int
{
    $days = 0;
    $limit = ($threshold / 100) * $content;

    while ($content >= $limit) {
        $content -= ($evapPerDay / 100) * $content;
        $days += 1;
    }

    return $days;
}

echo evaporator(10,10,10);
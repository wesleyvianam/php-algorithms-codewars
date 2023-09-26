<?php

declare(strict_types=1);

// Kata training https://www.codewars.com/kata/5648b12ce68d9daa6b000099/train/php

function number(array $bus_stops): int
{
    $in_bus = 0;
    
    foreach ($bus_stops as $bus) {
        $in_bus += $bus[0] - $bus[1];
    }

    return $in_bus;
}

echo number([[3,0],[9,1],[4,8],[12,2],[6,1],[7,8]]);
<?php

// Kata Training: https://www.codewars.com/kata/55ecd718f46fba02e5000029/train/php

function between(int $a, int $b): array
{
    return range($a, $b);
}

print_r(between(1,5));

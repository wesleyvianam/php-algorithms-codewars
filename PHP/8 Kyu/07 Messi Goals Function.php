<?php

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/55f73be6e12baaa5900000d4/train/php

function goals(int ...$args): int
{
    return array_sum($args);
}

echo goals(12,12,12);
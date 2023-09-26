<?php

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/523f5d21c841566fde000009/train/php

function arrayDiff(array $a, array $b): array
{
    return array_values(array_diff($a, $b));
}

echo arrayDiff([1, 2, 3], [1,2]);
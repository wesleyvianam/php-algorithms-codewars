<?php

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/5174a4c0f2769dd8b1000003/train/php

function solution($nums): array
{
    $nums = $nums ?? [];
    sort($nums);
    return $nums;
}

print_r(solution([1,10,2,5,3,4]));
print_r(solution(null));
print_r(solution([]));
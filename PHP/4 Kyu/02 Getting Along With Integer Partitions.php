<?php

// Kata Training: https://www.codewars.com/kata/55cf3b567fc0e02b0b00000b/train/php

function part(int $n): string {
    $product = calculateProduct($n);

    return sprintf(
        'Range: %d Average: %0.2f Median: %0.2f',
        calculateRange($product),
        calculateAverage($product),
        calculateMedian($product)
    );
}

function calculateProduct(int $n): array {
    static $cache = [];
    if (isset($cache[$n])) {
        return $cache[$n];
    }

    $result = [];
    $result[$n] = $n;
    for ($i = 1; $i < $n; $i++) {
        $subResult = calculateProduct($i);
        foreach ($subResult as $r) {
            $n2 = ($n - $i) * $r;
            $result[$n2] = $n2;
        }
    }
    sort($result);
    $cache[$n] = $result;

    return $result;
}

function calculateRange(array $product): int {
    return max($product) - min($product);
}

function calculateAverage(array $product): float {
    return array_sum($product) / count($product);
}

function calculateMedian(array $product): float {
    $count = count($product);
    $mid = intdiv($count, 2);
    return $count & 1
        ? $product[$mid]
        : ($product[$mid - 1] + $product[$mid]) / 2;
}

$number = 5;

echo part($number);
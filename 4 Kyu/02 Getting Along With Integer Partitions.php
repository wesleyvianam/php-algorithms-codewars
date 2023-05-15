<?php

/*

From wikipedia https://en.wikipedia.org/wiki/Partition_(number_theory)

In number theory and combinatorics, a partition of a positive integer n, also called an integer partition, is a way of writing n as a sum of positive integers. Two sums that differ only in the order of their summands are considered the same partition.

For example, 4 can be partitioned in five distinct ways:

4, 3 + 1, 2 + 2, 2 + 1 + 1, 1 + 1 + 1 + 1.

We can write:

enum(4) -> [[4],[3,1],[2,2],[2,1,1],[1,1,1,1]] and

enum(5) -> [[5],[4,1],[3,2],[3,1,1],[2,2,1],[2,1,1,1],[1,1,1,1,1]].

The number of parts in a partition grows very fast. For n = 50 number of parts is 204226, for 80 it is 15,796,476 It would be too long to tests answers with arrays of such size. So our task is the following:

1 - n being given (n integer, 1 <= n <= 50) calculate enum(n) ie the partition of n. We will obtain something like that:
enum(n) -> [[n],[n-1,1],[n-2,2],...,[1,1,...,1]] (order of array and sub-arrays doesn't matter). This part is not tested.

2 - For each sub-array of enum(n) calculate its product. If n = 5 we'll obtain after removing duplicates and sorting:

prod(5) -> [1,2,3,4,5,6]

prod(8) -> [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 15, 16, 18]

If n = 40 prod(n) has a length of 2699 hence the tests will not verify such arrays. Instead our task number 3 is:

3 - return the range, the average and the median of prod(n) in the following form (example for n = 5):

"Range: 5 Average: 3.50 Median: 3.50"

Range is an integer, Average and Median are float numbers rounded to two decimal places (".2f" in some languages).

Notes:
Range : difference between the highest and lowest values.

Mean or Average : To calculate mean, add together all of the numbers in a set and then divide the sum by the total count of numbers.

Median : The median is the number separating the higher half of a data sample from the lower half. (https://en.wikipedia.org/wiki/Median)

Hints:
Try to optimize your program to avoid timing out.

Memoization can be helpful but it is not mandatory for being successful.

Kata Training: https://www.codewars.com/kata/55cf3b567fc0e02b0b00000b/train/php

*/

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
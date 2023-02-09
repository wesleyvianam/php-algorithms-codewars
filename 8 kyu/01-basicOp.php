<?php

/*

Your task is to create a function that does four basic mathematical operations.

The function should take three arguments - operation(string/char), value1(number), value2(number).
The function should return result of numbers after applying the chosen operation.

kata Traning: https://www.codewars.com/kata/57356c55867b9b7a60000bd7/train/php

*/

function basicOp(string $op, int $val1, int $val2): int
{
    switch ($op) {
        case '+':
            return $val1 + $val2;
        case '-':
            return $val1 - $val2;
        case '*':
            return $val1 * $val2;
        case '/':
            return $val1 / $val2;
    }
}

echo basicOp("/", 5, 5);
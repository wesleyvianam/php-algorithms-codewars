<?php

declare(strict_types=1);

/*

Messi is a soccer player with goals in three leagues:

LaLiga
Copa del Rey
Champions
Complete the function to return his total number of goals in all three leagues.

Note: the input will always be valid.

For example:

5, 10, 2  -->  17

Kata Training: https://www.codewars.com/kata/55f73be6e12baaa5900000d4/train/php

*/

function goals(int ...$args): int
{
    return array_sum($args);
}

echo goals(12,12,12);
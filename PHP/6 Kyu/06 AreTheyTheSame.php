<?php

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/550498447451fbbd7600041c/train/php

function comp($a, $b)
{
    if (!$a || !$b) {return false;}
    if (count($a) === 0 || count($b) === 0) {return true;}
    if (count($a) != count($b)) {return false;}

    $result = [];
    foreach ($a as $item) {
        $number = ($item * $item);
        array_push($result, $number);
    }

    foreach ($result as $value) {
        if (!in_array($value, $b)) {
            return 'false';
        }
    }

    return 'true';
}

$a = [121, 144, 19, 161, 19, 144, 19, 11];
$b = [11*21, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];

echo comp($a, $b);
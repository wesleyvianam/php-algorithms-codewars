<?php

declare(strict_types=1);

// Kata Training: https://www.codewars.com/kata/546e2562b03326a88e000020/train/php

function square_digits(int $num): int 
{
    $result = [];
    $numbers = str_split(strval($num));
    
    for ($i = 0; $i < count($numbers) ; $i++) {
        array_push($result, $numbers[$i] * $numbers[$i]);
    }

    return intval(implode($result));
}

echo square_digits(9119);
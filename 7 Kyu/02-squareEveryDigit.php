<?php

declare(strict_types=1);

/*

Welcome. In this kata, you are asked to square every digit of a number and concatenate them.

For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1.

Note: The function accepts an integer and returns an integer

*/

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
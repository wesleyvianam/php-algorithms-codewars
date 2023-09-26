<?php

// https://www.codewars.com/kata/526dbd6c8c0eb53254000110/train/php

function alphanumeric(string $s): bool
{
    return ctype_alnum($s);
}

$str = "Hello 351";

echo alphanumeric($str);

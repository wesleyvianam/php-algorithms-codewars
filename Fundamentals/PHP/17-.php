<?php

declare(strict_types=1);

/*

Complete the function/method so that it returns the url with anything after the anchor (#) removed.

"www.codewars.com#about" --> "www.codewars.com"
"www.codewars.com?page=1" -->"www.codewars.com?page=1"

Kata training: https://www.codewars.com/kata/51f2b4448cadf20ed0000386/train/php

*/

function replaceAll(string $string): string
{
    return explode("#", $string)[0];
}

echo replaceAll("www.codewars.com#about");
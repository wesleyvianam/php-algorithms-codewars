<?php

/**
 * Kata Training: https://www.codewars.com/kata/54ba84be607a92aa900000f1/train/php
 */

/**
 * @description my code
 */
function isIsogram(string $string): bool
{
    if ($string === "") return true;
    $stringToArrayOrigin = str_split($string);
    $clearString = array_filter($stringToArrayOrigin, fn($value) => ctype_alpha($value));
    $lowerCaseString = array_map('strtolower', $clearString);

    $removingDuplicates = array_unique($lowerCaseString);

    return count($stringToArrayOrigin) === count($removingDuplicates);
}

/** The Best solutions
 function isIsogram(string $string): bool
 {
     if (empty($string)) return true;
         $array = str_split(strToLower($string));
         return (count($array) === count(array_unique($array)));
     }

     function isIsogram(string $string): bool
     {
         return strlen(count_chars(strtolower($string), 3)) === strlen($string);
     }
*/

echo isIsogram("Dermatoglyphics");

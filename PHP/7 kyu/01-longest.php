<?php
/*

Take 2 strings s1 and s2 including only letters from a to z. Return a new sorted string, the longest possible,
containing distinct letters - each taken only once - coming from s1 or s2.

functions:
    array_unique(): ensures that there is only one specific item in the array
    str_split(): convert a string to an array
    asort(): Sort an array in ascending order and maintain index association
    implode(): transform array in string

    https://www.codewars.com/kata/5656b6906de340bd1b0000ac/train/php
*/

function longest($a, $b) 
{
    $letters = array_unique(str_split($a .= $b));
    asort($letters);
    return implode('', $letters);
}

echo longest("aretheyhere", "yestheyarehere");


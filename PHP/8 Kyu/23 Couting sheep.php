<?php

// Kata Training: https://www.codewars.com/kata/54edbc7200b811e956000556/train/php

function countSheep(array $arr)
{
    return array_sum($arr);
}

echo countSheep([true, true, true, false, true, true, true, true, true, false, true, false, true, false, false, true, true, true, true, true, false, false, true, true]);
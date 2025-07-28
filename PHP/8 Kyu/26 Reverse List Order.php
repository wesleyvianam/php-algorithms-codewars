<?php

/**
 * Kata Training: https://www.codewars.com/kata/53da6d8d112bd1a0dc00008b/train/php
 */

function reverseList(array $list): array
{
    return array_reverse($list);
}

print_r(reverseList([1,2,3,4,5,6,7,8,9]));
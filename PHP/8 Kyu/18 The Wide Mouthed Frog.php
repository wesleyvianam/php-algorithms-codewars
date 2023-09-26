<?php

// Kata Training: https://www.codewars.com/kata/57ec8bd8f670e9a47a000f89/train/php

function mouth_size(string $animal): string 
{
    return $animal == 'alligator' ? 'small' :  'wide';
}

echo mouth_size('alligator');
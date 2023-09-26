<?php

// Kata Training: https://www.codewars.com/kata/568dcc3c7f12767a62000038/train/php

function setAlarm(bool $employed, bool $vacation): bool 
{
    return $employed == true && $vacation == false;
}

echo setAlarm(true, true);
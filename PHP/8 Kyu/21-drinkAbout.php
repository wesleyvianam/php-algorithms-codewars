<?php

// Kata Training: https://www.codewars.com/kata/56170e844da7c6f647000063/train/php

function people_with_age_drink(int $old): string {
    switch (true) {
        case ($old < 14): return "drink toddy";
        case ($old < 18): return "drink coke";
        case ($old < 21): return "drink beer";
        case ($old >= 21): return "drink whisky";
    }
    return "";
}

echo people_with_age_drink(19);
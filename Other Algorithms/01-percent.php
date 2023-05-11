<?php

function percentage($currentMonth, $lastMonth)
{
    $percent = 0;
    if ($currentMonth != $lastMonth) {

        if ($currentMonth > $lastMonth) {
            $positive = "Positivo";

            $percent = $lastMonth
                ? (($lastMonth - $currentMonth) / abs($lastMonth)) * 100
                : 100;
        } else {
            $positive = "Negativo";
            $percent = $currentMonth
                ? (($lastMonth - $currentMonth) / abs($currentMonth)) * 100
                : 100;
        }
    }

    echo $positive . PHP_EOL;
    return round(abs($percent));
}

echo percentage(0, -10);

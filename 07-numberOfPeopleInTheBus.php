<?php

declare(strict_types=1);

function number($bus_stops) {
    $in_bus = 0;
    
    foreach ($bus_stops as $bus) {
        $in_bus += $bus[0] - $bus[1];
    }

    return $in_bus;
}

echo number([[3,0],[9,1],[4,8],[12,2],[6,1],[7,8]]);
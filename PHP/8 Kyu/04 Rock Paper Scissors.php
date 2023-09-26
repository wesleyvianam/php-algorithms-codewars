<?php

declare(strict_types=1);

// Kata training: https://www.codewars.com/kata/5672a98bdbdd995fad00000f/train/php

function rpc(string $p1, string $p2): string
{
    if ($p1 === $p2) return "Draw!";

    if ($p1 == "scissors" && $p2 == "paper" ||
        $p1 == "rock" && $p2 == "scissors" ||
        $p1 == "paper" && $p2 == "rock"
    ) { return "Player 1 won!"; }

    return "Player 2 won!";
}

echo rpc("scissors", "paper");
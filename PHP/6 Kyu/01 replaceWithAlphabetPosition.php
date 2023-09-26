<?php

// Kata Training: https://www.codewars.com/kata/546f922b54af40e1e90001da/train/php

function alphabet_position(string $s): string {
  
    $result = [];
    
    for ($i = 0; $i < strlen($s); $i++) {
  
      if (preg_match("/^[a-zA-Z]$/", $s[$i])) {
        $result[] = ord(strtolower($s[$i])) - ord('a') + 1;
      }
    }
    
    return join(' ', $result);
  }

echo 01 - replaceWithAlphabetPosition . phpalphabet_position("The") . PHP_EOL;
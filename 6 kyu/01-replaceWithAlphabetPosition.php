<?php

/*

Welcome.
In this kata you are required to, given a string, replace every letter with its position in the alphabet.
If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc.

Kata Training: https://www.codewars.com/kata/546f922b54af40e1e90001da/train/php

*/

function alphabet_position(string $s): string {
  
    $result = [];
    
    for ($i = 0; $i < strlen($s); $i++) {
  
      if (preg_match("/^[a-zA-Z]$/", $s[$i])) {
        $result[] = ord(strtolower($s[$i])) - ord('a') + 1;
      }
    }
    
    return join(' ', $result);
  }

echo alphabet_position("The") . PHP_EOL;
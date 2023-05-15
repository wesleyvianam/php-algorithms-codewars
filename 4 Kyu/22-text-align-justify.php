<?php


/*

Your task in this Kata is to emulate text justification in monospace font. You will be given a single-lined text and the expected justification width. The longest word will never be greater than this width.

Here are the rules:

Use spaces to fill in the gaps between words.
Each line should contain as many words as possible.
Use '\n' to separate lines.
Gap between words can't differ by more than one space.
Lines should end with a word not a space.
'\n' is not included in the length of a line.
Large gaps go first, then smaller ones ('Lorem--ipsum--dolor--sit-amet,' (2, 2, 2, 1 spaces)).
Last line should not be justified, use only one space between words.
Last line should not contain '\n'
Strings with one word do not need gaps ('somelongword\n').

Example with width=30:

Kata Training: https://www.codewars.com/kata/537e18b6147aa838f600001b/train/php

*/

function justify($str, $len) {
    $words = explode(' ', $str);
    $lines = [];
    $lastLine = array_reduce($words, function($line, $word) use ($len, &$lines) {
        if ($line) {
            if (strlen($line) + strlen($word) + 1 <= $len)
                return $line . ' ' . $word;
            array_push($lines, $line);
        }
        return $word;
    });
    $lines = array_map(function($line) use ($len) {
        if (strpos($line, ' ') !== false)
            for ($lineLen = strlen($line); $lineLen < $len; )
                $line = preg_replace_callback('/ +/', function($matches) use (&$lineLen, $len) {
                    return $matches[0] . (++$lineLen <= $len ? ' ' : '');
                }, $line);
        return $line;
    }, $lines);
    $lastLine && array_push($lines, $lastLine);
    return implode("\n", $lines);
}

$str = "Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries";
$len = 15;

echo justify($str, $len);
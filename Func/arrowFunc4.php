<?php

$words = ["It's ", "fear ", "that ", "gives ", "men ", "wings."];

$strToUpperCase = fn($str) => strtoupper($str);

$wordsUpper = array_map($strToUpperCase, $words);

echo "Before change to upper case: \n";
print_r($words);
echo (implode("", $words));

echo "\nAfter change to upper case: \n";
print_r($wordsUpper);               # Each string from array
echo (implode("", $wordsUpper));    # Single string
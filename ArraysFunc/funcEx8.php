<?php

function doubleNumber($n){
    return ($n + $n);
}

$numbersA = [2, 9, 10];

$numbersB = array_map('doubleNumber', $numbersA);
print_r($numbersB);
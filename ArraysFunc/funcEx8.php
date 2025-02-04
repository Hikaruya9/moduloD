<?php

# Double the number passed as parameter
function doubleNumber($n){
    return ($n * 2);
}

$numbersA = [2, 7, 10];
$numbersB = array_map('doubleNumber', $numbersA);   # Applies function callback to each value from the array    # Double each number in this case
print_r($numbersB);
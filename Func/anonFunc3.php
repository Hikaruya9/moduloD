<?php

$numbers = [2,10,7,4,9];

$numSqr = function($n){
    return $n * $n;
};

$numbers = array_map($numSqr, $numbers); # Applies function on each element of the array
print_r($numbers);
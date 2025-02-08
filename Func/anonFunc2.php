<?php

$numbers = [10,22,42,77,100,113];

$filter = function($numArr){
    return ($numArr % 2) == 0;
};

$numbers = array_filter($numbers, $filter); # Applies function check to each element of the array
print_r($numbers);
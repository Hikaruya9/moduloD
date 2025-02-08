<?php

$numbers = [42, -19, 22, -99, 73, 24];

$verifyEven = fn($numArr) => $numArr > 0;

$numbers = array_filter($numbers, $verifyEven);
print_r($numbers);
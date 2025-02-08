<?php

$numbers = [4, 12, 10, 7, 2];

$numExpCube = fn($n) => $n ** 3;     # ** operator for exponenciation

$numbers = array_map($numExpCube, $numbers);
print_r($numbers);
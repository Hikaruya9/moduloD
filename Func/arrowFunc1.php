<?php

echo "Digite um valor: ";
$number1 = readLine();
echo "Digite outro valor: ";
$number2 = readLine();

$sum = fn($n1,$n2) => $n1 + $n2;    # Arrow function

print($sum($number1,$number2));
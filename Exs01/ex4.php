<?php

echo "Digite um número: ";
$n = readLine();

echo "\n";
echo "Tabuada do número " . $n . "\n";
for ($i = 1; $i <= 10; $i++) {
    $res = $n*$i;
    Print($n . " * " . $i . " = " . $res . "\n");
}
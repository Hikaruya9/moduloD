<?php

$numbers = [];
$numbersInv = [];
$index = 10;

for ($i = 0; $i < 10; $i++){
    echo "Digite um número: ";
    $n = readLine();
    $numbers[] = $n;
}

for($i = 0; $i < 10; $i++){
    $numbersInv[$i] = $numbers[$index-1];
    $index--;
}

echo "Lista normal:\n";
print_r($numbers);
echo "Lista invertida:\n";
print_r($numbersInv);
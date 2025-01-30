<?php

$numbers = [];

for ($i = 0; $i < 10; $i++){
    echo "Digite um número: ";
    $n = readLine();
    $numbers[] = $n;
}

echo "\n";
echo "Digite o número pelo qual a lista será multiplicada: ";
$multNumber = readLine();

foreach($numbers as $n){
    $res = $n*$multNumber;
    print($n . " * " . $multNumber . " = " . $res . "\n");
}
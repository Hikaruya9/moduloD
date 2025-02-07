<?php

echo "Digite o número mínimo a ser gerado: ";
$min = readline();
echo "Digite o número máximo a ser gerado: ";
$max = readline();
echo randomNumber($min, $max);

function randomNumber($min, $max){
    $randNum = rand($min, $max);
    return $randNum;
}
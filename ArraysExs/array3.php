<?php

$numbers; # Declaração da lista

# Pede ao usuário que digite os números para preencher a lista
for ($i = 0; $i < 10; $i++){
    echo "Digite um número: ";
    $n = readLine();
    $numbers[] = $n;
}

echo "\n";
echo "Digite o número pelo qual a lista será multiplicada: ";
$multNumber = readLine(); # Envia um prompt ao usuário para que digite o número que ele deseja usar pra multiplicar a lista

# Realiza a multiplicação da lista pelo valor digitado e exibe o resultado na tela
foreach($numbers as $n){
    $res = $n*$multNumber;
    print($n . " * " . $multNumber . " = " . $res . "\n");
}
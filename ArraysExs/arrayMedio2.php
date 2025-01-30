<?php

$numbers; # Lista de 15 números
$sum = 0; # Variável pra guardar o resultado da soma
$arraySize = 15;

# Pede ao usuário os números para preencher a lista
for($i = 0; $i < $arraySize; $i++){
    echo "Digite um número: ";
    $n = readline();
    $numbers[] = $n;
}

# Realiza a soma dos elementos em posições pares da lista de números
for($i = 0; $i < $arraySize; $i+=2){
    $sum += $numbers[$i];
}

# Exibe a soma total dos elementos em posições pares
echo "Soma dos elementos em posições pares da lista: \n";
print($sum);
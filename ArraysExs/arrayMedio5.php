<?php

$numbers1; # Primeira lista com números
$numbers2; # Segunda lista com números
$multRes; # Lista que guardará o resultado da multiplicação da primeira com a segunda lista
$arraySize = 10; # Define o tamanho das listas

# Pede ao usuário os números para preencher a primeira lista
for($i = 0; $i < $arraySize; $i++){
    echo "Digite um número para a primeira lista: ";
    $n = readline();
    $numbers1[] = $n;
}

# Pede ao usuário os números para preencher a segunda lista
for($i = 0; $i < $arraySize; $i++){
    echo "Digite um número para a segunda lista: ";
    $n = readline();
    $numbers2[] = $n;
}

# Realiza a multiplicação dos elementos de mesmo índice da primeira lista pelo da segunda lista e insere no #multRes
for($i = 0; $i < $arraySize; $i++){
    $multRes[] = $numbers1[$i]*$numbers2[$i];
}

# Exibe a lista com os resultados das multiplicações armazenadas
foreach($multRes as $res){
    print($res . " | ");
}
<?php

$numbers1; # Primeira lista com números
$numbers2; # Segunda lista com números
$numbersBoth; # Lista em que as outras duas serão intercaladas
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

# Insere intercaladamente os números das duas listas na $numbersBoth
for($i = 0; $i < $arraySize; $i++){
    $numbersBoth[] = $numbers1[$i];
    $numbersBoth[] = $numbers2[$i];
}

# Exibe a lista intercalada
foreach($numbersBoth as $number){
    print($number . " | ");
}
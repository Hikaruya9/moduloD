<?php

$numbers; # Lista de números
$numbersInv; # Lista que guardará a lista de números invertida
$index = 10; # Indíce para utilizar no laço que realiza a inversão
$listSize = 10; # Define o tamanho que as listas terão

# Pede ao usuário que digite os números para incluir na lista
for ($i = 0; $i < $listSize; $i++){
    echo "Digite um número: ";
    $n = readLine();
    $numbers[] = $n;
}

# Pega os números da lista e insere do fim ao início na outra lista
for($i = 0; $i < $listSize; $i++){
    $numbersInv[$i] = $numbers[$index-1];
    $index--;
}

echo "Lista normal:\n";
print_r($numbers); # Exibe a lista normal, antes da inversão
echo "Lista invertida:\n";
print_r($numbersInv); # Exibe a lista já invertida
<?php

$numbers; # Lista para os números
$index = 10; # Index pra utilizar na inversão dos valores na lista;

# Pede ao usuário os números para preencher a lista
for($i = 0; $i < 10; $i++){
    echo "Digite um número: ";
    $n = readline();
    $numbers[] = $n;
}

# Imprime a lista de números normal
echo "Lista normal: \n";
foreach ($numbers as $number) {
    print($number . " | ");
}

# Realiza a inversão dos valores na lista de números
for ($i = 0; $i < $index; $i++) {
    $n = $numbers[$index - 1];
    $numbers[$index - 1] = $numbers[$i];
    $numbers[$i] = $n;
    $index--;
}

# Imprime a lista de números invertida
echo "\nLista invertida: \n";
foreach ($numbers as $number) {
    print($number . " | ");
}
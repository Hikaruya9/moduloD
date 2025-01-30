<?php

$numbers1; # Primeira lista de números
$numbers2; # Segunda lista de números

# Laço que pede ao usuário para preencher ambas as listas
for ($i = 0; $i < 20; $i++) {
    if ($i < 10) {
        echo "Digite um número para a primeira lista: ";
        $n = readLine();
        $numbers1[] = $n;
    } else {
        echo "Digite um número para a segunda lista: ";
        $n = readLine();
        $numbers2[] = $n;
    }
}

# Realiza a multiplicação das listas e exibe seu resultado
for ($i = 0; $i < 10; $i++) {
    $res = $numbers1[$i] * $numbers2[$i];
    print($numbers1[$i] . " * " . $numbers2[$i] . " = " . $res . "\n");
}
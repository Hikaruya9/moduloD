<?php

# Lista e contadores
$numbers;
$contNeg = 0;
$contPos = 0;
$contPar = 0;
$contImpar = 0;

# Pede ao usuário que informe números para completar a lista
for ($i = 0; $i < 10; $i++){
    echo "Digite um número: ";
    $n = readLine();
    $numbers[] = $n;
}

# Verifica cada número da lista e incrementa seu respectivo contador
foreach($numbers as $n){
    if ($n % 2 == 1 || $n % 2 == -1){
        $contImpar++;
    } elseif ($n != 0 && $n % 2 == 0) {
        $contPar++;
    }

    if ($n > 0){
        $contPos++;
    } elseif ($n < 0) {
        $contNeg++;
    }
}

# Exibe quando valores foram encontrados em cada contador
print("Há " . $contNeg . " números negativos na lista.\n");
print("Há " . $contPos . " números positivos na lista.\n");
print("Há " . $contPar . " números pares na lista.\n");
print("Há " . $contImpar . " números ímpares na lista.\n");
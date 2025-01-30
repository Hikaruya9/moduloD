<?php

$numbers; # Lista dos números
$countOdd = 0; # Contador dos números ímpares

# Pede ao usuário que digite um número e insere na lista
for($i = 0; $i < 20; $i++){
    echo "Digite um número: ";
    $n = readline();
    $numbers[$i] = $n;
}

# Laço para verificar quais são os números ímpares e inserir no contador
foreach($numbers as $number){
    if ($number % 2 == 1 || $number % 2 == -1){
        $countOdd++;
    }
}

# Exibe quantos números ímpares há na lista
print("Há " . $countOdd . " números ímpares na lista.");
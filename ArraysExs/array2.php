<?php

$numbers = [];
$contNeg = 0;
$contPos = 0;
$contPar = 0;
$contImpar = 0;

for ($i = 0; $i < 10; $i++){
    echo "Digite um número: ";
    $n = readLine();
    $numbers[] = $n;
}

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

print("Há " . $contNeg . " números negativos na lista.\n");
print("Há " . $contPos . " números positivos na lista.\n");
print("Há " . $contPar . " números pares na lista.\n");
print("Há " . $contImpar . " números ímpares na lista.\n");
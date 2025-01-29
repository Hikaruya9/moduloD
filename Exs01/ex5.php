<?php

$min = 1;
$max = 10;
$attempt = 5;
$randomNumber = rand($min, $max);

while($attempt > 0){
    echo "Digite um número de " . $min . " a " . $max . ": ";
    $n = readLine();

    if ($n >= $min && $n <= $max){
        if ($n == $randomNumber) {
            Print("Parabéns, você acertou o número!");
            break;
        } else {
            $attempt--;
            if ($attempt > 0) {
                Print("Você errou o número, " . $attempt . " tentativas restantes\n");
            } else {
                Print("Lamento, você não conseguiu advinhar o número. \nO número certo era: " . $randomNumber . "\n");
            }
        }
    } else {
        echo "O número digitado é inválido.\n";
    }
}
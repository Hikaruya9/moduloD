<?php

echo "Digite um número: ";
$n = readLine();
evenOrOdd($n);

function evenOrOdd($n){
    echo ($n % 2 == 0) ? 'Par' : 'Impar';
}
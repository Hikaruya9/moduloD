<?php

$double = function($n){     # Anonymous function
    return $n * 2;
};

echo "Digite um número: ";
$number = readline();

echo "Dobro do número digitado -> " . $double($number);
<?php

$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

echo "Digite o número correspondente ao mês buscado: ";
$month = readline();

if ($month > 0 && $month < 13){
    print($months[$month-1]);
} else {
    echo "Não há um mês correspondente à esse número.";
}
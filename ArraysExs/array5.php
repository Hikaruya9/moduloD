<?php

# lista com os meses do ano
$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

# Pede ao usuário que digite o número do mês procurado
echo "Digite o número correspondente ao mês buscado: ";
$month = readline();

# Realiza uma checagem para garantir que o usuário digitará um número válido
if ($month > 0 && $month < 13){
    print($months[$month-1]);
} else {
    echo "Não há um mês correspondente à esse número.";
}
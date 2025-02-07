<?php

echo "Digite um número para fatorar: ";
$n = readline();
echo factorial($n);

function factorial($n){
    $res = null;
    while($n > 1){
        if ($res == null){
            $res = $n;
        } else {
            $res *= $n;
        }
        $n--;
    }
    return $res;
}
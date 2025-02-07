<?php

echo "Digite uma palavra para verificar se é palíndromo: ";
$word = readLine();
isPalindrome($word);

function isPalindrome($word){
    echo ($word == strrev($word)) ? "É palíndromo" : "Não é palíndromo";
}
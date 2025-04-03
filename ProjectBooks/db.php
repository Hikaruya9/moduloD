<?php

// Função que estabelece comunicação com o Banco de Dados
function db(){
    return $db = new PDO('sqlite:banco.sqlite');
}

?>
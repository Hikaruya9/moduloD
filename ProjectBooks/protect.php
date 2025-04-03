<?php

if(!isset($_SESSION)){
    session_start();
}

// Impede o usuário de entrar na página que exige estar logado para acessar
if(!isset($_SESSION['id'])){
    die("Você não não permissão para acessar esta página! <br> <a href='signUp.php'>Voltar</a>");
}

?>
<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não não permissão para acessar esta página! <br> <a href='signUp.php'>Voltar</a>");
}

?>
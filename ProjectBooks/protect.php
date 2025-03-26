<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não deveria estar aqui! <br> <a href='signUp.php'>Voltar</a>");
}

?>
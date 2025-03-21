<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
    die("Você não tem permissão de acessar essa pagina! <br><a href='index.php'> Voltar para a pagina Inicial");
}
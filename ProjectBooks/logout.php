<?php

if(!isset($_SESSION)){
    session_start();
}

// Corta a sessão do usuário que está logado
session_destroy();

header('Location: index.php');

?>
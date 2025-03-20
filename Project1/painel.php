<?php

include 'protect.php';

if (!isset($_SESSION)) {
    session_start();
}

?>

<h1> Bem vindo <?= $_SESSION['nome']; ?> </h1>
<a href="logout.php">Deslogar</a>
<a href="">Atualizar conta</a>
<a href="index.php">Excluir conta</a>
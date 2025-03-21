<?php

include 'protect.php';

if (!isset($_SESSION)) {
    session_start();
}

?>

<h1> Bem vindo <?= $_SESSION['nome']; ?> </h1>
<a href="logout.php">Deslogar</a><br>
<a href="atualizar.php">Alterar conta</a><br>
<a href="deletar.php">Excluir conta</a>
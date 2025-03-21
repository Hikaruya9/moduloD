<?php

include 'db.php';

if (!isset($_SESSION)) {
    session_start();
}

$query = db()->prepare("SELECT * FROM usuarios WHERE id = :id");
$query->execute(['id' => $_SESSION['id']]);
$user = $query->fetch()

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>

<body>
    <h1>Atualizar</h1>

    <?php
    if (isset($_SESSION['mensagem'])) {
        echo '<h1 class="text-red-800 font-bold border-2 border-solid border-red-950 w-100" >' . $_SESSION['mensagem'] . '</h1>';
        unset($_SESSION['mensagem']);
    }

    ?>

    <form action="acoes.php" method="POST">
        <label for="nome">Nome novo</label>
        <input class="border-2 border-solid " type="text" name="nome" value=<?= $user['nome']; ?>><br>
        <label for="email">Email novo</label>
        <input class="border-2 border-solid" type="email" name="email" value=<?= $user['email']; ?>><br>
        <label for="Senha">Senha nova</label>
        <input class="border-2 border-solid" type="password" name="senha" value=<?= $user['senha']; ?>><br>
        <button type="submit" name="atualizar_usuario">Atualizar</button>
    </form>
</body>

</html>
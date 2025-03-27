<?php

include('header.php');
include('footer.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['id'])) {
    header('Location: panel.php');
}

if (isset($_SESSION['mensagem'])) {
    echo '<h4>' . $_SESSION['mensagem'] . '</h4>';
    unset($_SESSION['mensagem']);
}

?>

<strong><a class="" href="index.php">Home</a></strong>

<form action="actions.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="password">Senha</label>
    <input type="password" name="password" required><br>
    <button type="submit" name="sign-up">Sign Up</button>
</form>

<strong><a href="signIn.php">Sign In</a></strong>
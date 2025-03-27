<?php 

include('header.php');
include('footer.php');

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id'])){
    header('Location: panel.php');
}

?>

<strong><a class="" href="index.php">Home</a></strong>

<form action="actions.php" method="POST">
    <label for="name">Nome</label>
    <input type="text" name="name" required><br>
    <label for="email">Email</label>
    <input type="email" name="email" required><br>
    <label for="password">Senha</label>
    <input type="password" name="password" required><br>
    <button type="submit" name="sign-in">Sign In</button>
</form>

<strong><a href="signUp.php">Sign Up</a></strong>

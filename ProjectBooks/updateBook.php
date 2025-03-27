<?php 

include('protect.php');
include('header.php');
include('footer.php');

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id'])){
    header('Location: panel.php');
}

?>

<strong><a class="booksList.php" href="index.php">Voltar</a></strong>

<form action="actions.php" method="POST">
    <label for="title">Título</label>
    <input type="text" name="title" required><br>
    <label for="author">Autor</label>
    <input type="text" name="author" required><br>
    <label for="desc">Descrição</label>
    <input type="text" name="desc" required><br>
    <button type="submit" name="update-book">Enviar</button>
    <button type="reset">Limpar</button>
</form>

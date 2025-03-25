<?php 

include('header.php');
include('footer.php');

?>

<strong><a class="" href="index.php">Home</a></strong>

<form action="actions.php" method="POST">
    <label for="title">Título</label>
    <input type="text" name="title" required><br>
    <label for="author">Autor</label>
    <input type="text" name="author" required><br>
    <label for="desc">Descrição</label>
    <input type="text" name="desc" required><br>
    <button type="submit" name="form">Enviar</button>
    <button type="reset">Limpar</button>
</form>
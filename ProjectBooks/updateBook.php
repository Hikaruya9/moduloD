<?php

include('protect.php');
include('db.php');
include('header.php');
include('footer.php');

if (isset($_POST['update-book-id'])) {
    $query = db()->prepare("SELECT id,title,author,desc FROM books WHERE id = :id");

    $query->execute([
        'id' => $_POST['book-id']
    ]);

    $book = $query->fetch();
}

?>

<strong><a class="" href="booksList.php">Voltar</a></strong>

<form action="actions.php" method="post">
    <input type="number" name="book-id" min="1" value="<?= $book['id'] ?>" hidden>
    <label for="new-book-title">Título</label>
    <input type="text" name="new-book-title" value="<?= $book['title'] ?>" required><br>
    <label for="new-book-author">Autor</label>
    <input type="text" name="new-book-author" value="<?= $book['author'] ?>" required><br>
    <label for="new-book-desc">Descrição</label>
    <input type="text" name="new-book-desc" value="<?= $book['desc'] ?>" required><br>
    <button type="submit" name="update-book">Enviar</button>
    <button type="reset">Limpar</button>
</form>
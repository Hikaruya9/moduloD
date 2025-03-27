<?php

include('protect.php');
include('db.php');
// include('header.php');
// include('footer.php');

if (!isset($_POST['book-search'])) {

    $query = db()->prepare("SELECT books.id, books.title, books.author, books.desc, users.name AS user, books.contribuitor 
                        FROM books 
                        INNER JOIN users ON books.contribuitor=users.id");
    $query->execute();

    $books = $query->fetchAll();

} else {

    $query = db()->prepare("SELECT books.id, books.title, books.author, books.desc, users.name AS user, books.contribuitor 
                        FROM books 
                        INNER JOIN users ON books.contribuitor=users.id
                        WHERE books.title LIKE :search OR books.author LIKE :search");
    $query->execute([
        'search' => "%" . $_POST['book-search'] . "%"
    ]);

    $books = $query->fetchAll();
}

?>

<strong><a class="text-lg" href="index.php">Home</a></strong>

<search>
    <form action="" method="post">
        <label for="book-search">Pesquisar livro</label><br>
        <input type="search" name="book-search" placeholder="Título ou autor...">
        <button type="submit">Search</button>
    </form>
</search>

<table class=""> <!-- Tabela -->
    <?php if (count($books) > 0) { ?>
        <thead> <!-- Cabeçalho da tabela -->
            <tr> <!-- Linha da tabela -->
                <!-- Células da tabela -->
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Descrição</th>
                <th>Contribuidor</th>
            </tr>
        </thead>
        <tbody> <!-- Conteúdo da tabela -->
            <!-- Integração do PHP para mostrar o que foi retornado da consulta no BD na página -->
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?= $book['id']; ?></td>
                    <td><?= $book['title']; ?></td>
                    <td><?= $book['author']; ?></td>
                    <td><?= $book['desc']; ?></td>
                    <td><?= $book['user']; ?></td>
                    <?php if ($_SESSION['id'] == $book['contribuitor']): ?>
                        <td><a class="mr-8" href="updateBook.php">Atualizar</a></td>
                        <td><a href="deleteBook.php">Deletar</a></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    <?php } else {
        echo "<h2 class='font-bold text-xl'>Não há livros cadastrados no momento!</h2>";
    } ?>
</table>

<strong><a href="form.php">Enviar novo livro</a></strong>
<?php

include('db.php');
include('header.php');
include('footer.php');

$query = db()->prepare("SELECT * FROM books");
$query->execute();

$books = $query->fetchAll();

?>

<strong><a class="text-lg" href="index.php">Home</a></strong>

<table class=""> <!-- Tabela -->
    <?php if(count($books) > 0){ ?>
    <thead> <!-- Cabeçalho da tabela -->
        <tr> <!-- Linha da tabela -->
            <!-- Células da tabela -->
            <th>ID</th> 
            <th>Título</th>
            <th>Autor</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody> <!-- Conteúdo da tabela -->
        <!-- Integração do PHP para mostrar o que foi retornado da consulta no BD na página -->
        <?php foreach($books as $book): ?>
        <tr>
            <td><?= $book['id']; ?></td>
            <td><?= $book['title']; ?></td>
            <td><?= $book['author']; ?></td>
            <td><?= $book['desc']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <?php } else {
        echo "<h2 class='font-bold text-xl'>Não há livros cadastrados no momento!</h2>";
    } ?>
</table>
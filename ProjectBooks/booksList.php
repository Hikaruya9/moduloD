<?php

include('protect.php');
include('db.php');
include('header.php');

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

<div class="pt-10 pb-20">
    <!-- Formulário de Pesquisa -->
    <section class="max-w-7xl mx-auto px-6 py-10">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <form action="" method="post" class="space-y-4">
                <label for="book-search" class="block text-xl font-semibold text-gray-300">Pesquisar livro</label>
                <div class="flex space-x-4">
                    <input type="search" name="book-search" placeholder="Título ou autor..." class="w-full p-3 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-500">
                    <button type="submit" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition">Pesquisar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Tabela de Livros -->
    <section class="max-w-7xl mx-auto px-6 py-10">
        <?php if (count($books) > 0): ?>
            <div class="overflow-x-auto bg-gray-800 p-6 rounded-lg shadow-lg">
                <table class="min-w-full text-left table-auto">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">ID</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">Título</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">Autor</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">Descrição</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">Contribuidor</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book): ?>
                            <tr class="border-b border-gray-700">
                                <td class="px-6 py-4"><?= $book['id']; ?></td>
                                <td class="px-6 py-4"><?= $book['title']; ?></td>
                                <td class="px-6 py-4"><?= $book['author']; ?></td>
                                <td class="px-6 py-4"><?= $book['desc']; ?></td>
                                <td class="px-6 py-4"><?= $book['user']; ?></td>
                                <?php if ($_SESSION['id'] == $book['contribuitor']): ?>
                                    <td class="px-6 py-4">
                                        <form action="updateBook.php" method="post" class="inline-block mb-1">
                                            <input type="number" name="book-id" value="<?= $book['id'] ?>" hidden>
                                            <button type="submit" name="update-book-id" class="px-4 py-2 bg-yellow-500 text-white font-semibold rounded-md hover:bg-yellow-600 transition">Atualizar</button>
                                        </form>
                                        <form action="actions.php" method="post" class="inline-block mt-1">
                                            <input type="number" name="book-id" value="<?= $book['id'] ?>" hidden>
                                            <button type="submit" name="delete-book" class=" pl-6 px-5 py-2 bg-red-500 text-white text-center font-semibold rounded-md hover:bg-red-600 transition">Deletar</button>
                                        </form>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="bg-red-100 text-red-600 p-4 rounded-lg">
                <h2 class="font-bold text-xl">Não há livros cadastrados no momento!</h2>
            </div>
        <?php endif; ?>
    </section>

    <!-- Link para enviar novo livro -->
    <section class="py-4 px-6 text-center">
        <strong><a href="submitBook.php" class="text-lg text-indigo-400 hover:text-indigo-500">Enviar novo livro</a></strong>
    </section>
</div>

<?php
include('footer.php');
?>
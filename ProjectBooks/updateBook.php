<?php

include('protect.php');
include('db.php');
include('header.php');

// Mensagem no topo da página em caso de campo obrigatório vazio
if (isset($_SESSION['message'])) {
    echo '<h4 class="text-3xl font-bold text-indigo-300 text-center">' . $_SESSION['message'] . '</h4>';
    unset($_SESSION['message']);
}

// Query para preenchimento automático dos campos
if (isset($_POST['update-book-id'])) {
    $query = db()->prepare("SELECT id,title,author,desc,cover FROM books WHERE id = :id");

    $query->execute([
        'id' => $_POST['book-id']
    ]);

    $book = $query->fetch();
}

?>

<section class="flex justify-center items-center min-h-screen bg-gray-900">
    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold text-indigo-400 mb-6 text-center">Atualização de livro</h2>

        <form action="actions.php" method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="number" name="book-id" min="1" value="<?= $book['id']; ?>" hidden>

            <!-- Novo título do livro -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-300">Título</label>
                <input type="text" name="new-book-title" value="<?= $book['title']; ?>" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Novo autor do livro -->
            <div>
                <label for="author" class="block text-sm font-medium text-gray-300">Autor</label>
                <input type="text" name="new-book-author" value="<?= $book['author']; ?>" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Nova descrição do livro -->
            <div>
                <label for="desc" class="block text-sm font-medium text-gray-300">Descrição</label>
                <textarea name="new-book-desc" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"><?= $book['desc'] ?></textarea>
            </div>

            <!-- Nova capa do livro -->
            <div>
                <label for="cover" class="block text-sm font-medium text-gray-300">Capa</label>
                <input type="file" name="new-book-cover">
            </div>

            <!-- Botão de Envio -->
            <button type="submit" name="update-book" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition">Atualizar livro</button>
        </form>
    </div>
</section>

<?php

include('footer.php');

?>
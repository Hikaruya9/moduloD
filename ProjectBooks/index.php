<?php

if (!isset($_SESSION)) {
    session_start();
}

include('header.php');
include('db.php');

if (!isset($_POST['book-search'])) {
    $query = db()->prepare("SELECT books.id, books.title, books.author, books.desc, books.cover, users.name AS user, books.contribuitor 
                        FROM books 
                        INNER JOIN users ON books.contribuitor=users.id");
    $query->execute();

    $books = $query->fetchAll();
} else {
    $query = db()->prepare("SELECT books.id, books.title, books.author, books.desc, books.cover, users.name AS user, books.contribuitor 
                        FROM books 
                        INNER JOIN users ON books.contribuitor=users.id
                        WHERE books.title LIKE :search OR books.author LIKE :search");
    $query->execute([
        'search' => "%" . $_POST['book-search'] . "%"
    ]);
    $books = $query->fetchAll();
}

?>

<div class="pb-20">
    <!-- Topo da página -->
    <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-700">Bem-vindo ao banco dos livros!</h2>
            <p class="text-lg mt-4 text-gray-600">A biblioteca perfeita para buscar informações por algum livro que esteja buscando.</p>
            <h3 class="text-2xl mt-20 font-semibold text-gray-600">Livros encontrados em nosso banco de dados atualmente:</h3>
        </div>
    </section>

    <!-- Grade de livros -->
    <section class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Livros -->
            <?php foreach ($books as $book): ?>
                <div class="bg-gray-700 shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-175 object-cover" src="covers/<?= $book['cover']; ?>" alt="<?= $book['title']; ?>">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-slate-500"><?= $book['title'] . " - " . $book['author']; ?></h3>
                        <p class="mt-2 text-gray-400 line-clamp-2 overflow-hidden"><?= $book['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>

<?php

include('footer.php');

?>
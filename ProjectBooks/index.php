<?php

if (!isset($_SESSION)) {
    session_start();
}

include('header.php');

?>

<div class="pb-20">
    <!-- Destaque -->
    <section class="py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Bem-vindo ao banco dos livros!</h2>
            <p class="mt-4 text-gray-600">Aqui você encontra artigos sobre tecnologia, desenvolvimento e muito mais.</p>
            <a href="#" class="mt-6 inline-block px-6 py-3 bg-blue-500 text-white rounded hover:bg-blue-600">Ver Posts</a>
        </div>
    </section>

    <!-- Grade de livros -->
    <section class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Livros -->
            <div class="bg-gray-700 shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x200" alt="Post 1">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800">Título do Livro</h3>
                    <p class="mt-2 text-gray-600">Descrição breve do post.</p>
                </div>
            </div>
            <!-- Livros 2 e 3 (repetir estrutura) -->
        </div>
    </section>
</div>

<?php

include('footer.php');

?>
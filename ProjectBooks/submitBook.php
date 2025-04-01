<?php 

include 'protect.php';
include('header.php');

?>

<section class="flex justify-center items-center min-h-screen bg-gray-900">
    <div class="bg-zinc-800 text-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold text-indigo-400 mb-6 text-center">Envio de Livro</h2>

        <form action="actions.php" method="POST" class="space-y-4">
            <!-- Título -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-300">Título</label>
                <input type="text" name="title" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Autor -->
            <div>
                <label for="author" class="block text-sm font-medium text-gray-300">Autor</label>
                <input type="text" name="author" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Descrição -->
            <div>
                <label for="desc" class="block text-sm font-medium text-gray-300">Descrição</label>
                <textarea name="desc" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
            </div>

            <!-- Botão de Envio -->
            <button type="submit" name="submit-book" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition">Enviar Livro</button>
        </form>
    </div>
</section>

<?php

include('footer.php');

?>
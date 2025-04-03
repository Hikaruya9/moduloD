<?php

include 'protect.php';
include 'header.php';

if (!isset($_SESSION)) {
    session_start();
}

?>

<!-- Painel do usuário logado -->
<div class="pt-20 pb-10">
    <h1 class='text-3xl font-bold text-indigo-300 text-center'> Seja bem-vindo, <?= $_SESSION['name'] ?>!</h1>

    <div class="container flex flex-col mx-auto gap-10 justify-center items-center align-center text-white p-6 mt-8 py-10">
        <img class="h-100 object-scale-down" src="welcome/guts.jpg" alt="welcome">
        <nav>
            <ul class="flex space-x-30 space-y-4">
                <li><a href="index.php" class="text-lg font-semibold hover:text-indigo-400 transition">Home</a></li>
                <li><a href="booksList.php" class="text-lg font-semibold hover:text-indigo-400 transition">Ver livros</a></li>
                <li><a href="logout.php" class="text-lg font-semibold hover:text-red-500 transition">Logout</a></li>
            </ul>
        </nav>
    </div>
</div>

<?php

include 'footer.php';

?>
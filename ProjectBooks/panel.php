<?php

include 'protect.php';
include 'header.php';

if (!isset($_SESSION)) {
    session_start();
}

?>

<div class="py-15">
    <h1 class='text-3xl font-bold text-indigo-300 text-center'> Seja bem-vindo, <?= $_SESSION['name'] ?>!</h1>

    <div class="text-white p-6 mt-8 py-10">
        <nav>
            <ul class="space-y-4">
                <li><a href="index.php" class="text-lg hover:text-indigo-400 transition">Home</a></li>
                <li><a href="booksList.php" class="text-lg hover:text-indigo-400 transition">Ver livros</a></li>
                <li><a href="logout.php" class="text-lg hover:text-red-500 transition">Logout</a></li>
            </ul>
        </nav>
    </div>
</div>

<?php

include 'footer.php';

?>
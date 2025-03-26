<?php

if (!isset($_SESSION)) {
    session_start();
}

include('header.php');
include('footer.php');

?>

<header class="bg-zinc-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-2xl font-bold">The Book Database</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="booksList.php" class="hover:text-blue-200">Livros</a></li>
                <?php if (isset($_SESSION['id'])): ?>
                    <li><a href="panel.php" class="hover:text-blue-200">Painel</a></li>
                <?php else: ?>
                    <li><a href="signIn.php" class="hover:text-blue-200">Sign In</a></li>
                    <li><a href="signUp.php" class="hover:text-blue-200">Sign Up</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
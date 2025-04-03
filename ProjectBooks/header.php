<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>The Book Database</title>
</head>
<body class="bg-gray-900 text-white">

<header class="bg-slate-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Título do site -->
        <h1 class="text-2xl font-bold text-indigo-400 hover:text-indigo-500 transition"><a href="index.php">The Book Database</a></h1>

        <!-- Menu de navegação -->
        <nav>
            <ul class="flex space-x-6">
                <?php if (isset($_SESSION['id'])): ?>
                    <!-- Links visíveis quando o usuário está logado -->
                    <li><a href="booksList.php" class="text-white font-bold text-lg hover:text-indigo-400 transition">Livros</a></li>
                    <li><a href="panel.php" class="text-white font-bold text-lg hover:text-indigo-400 transition">Painel</a></li>
                <?php else: ?>
                    <!-- Links visíveis quando o usuário não está logado -->
                    <li><a href="signIn.php" class="text-white font-bold text-lg hover:text-indigo-400 transition">Sign In</a></li>
                    <li><a href="signUp.php" class="text-white font-bold text-lg hover:text-indigo-400 transition">Sign Up</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
    
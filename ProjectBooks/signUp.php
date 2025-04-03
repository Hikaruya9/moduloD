<?php

include('header.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['id'])) {
    header('Location: panel.php');
}

if (isset($_SESSION['message'])) {
    echo '<h4 class="text-3xl font-bold text-indigo-300 text-center">' . $_SESSION['message'] . '</h4>';
    unset($_SESSION['message']);
}

?>

<!-- Login -->
<section class="flex justify-center items-center min-h-screen bg-gray-900">
    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold text-indigo-400 mb-6 text-center">Login</h2>

        <form action="actions.php" method="POST" class="space-y-4">
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                <input type="email" name="email" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Senha -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300">Senha</label>
                <input type="password" name="password" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Botão de envio -->
            <button type="submit" name="sign-up" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition">Entrar</button>
        </form>

        <!-- Link para cadastro -->
        <div class="mt-4 text-center">
            <strong><a href="signIn.php" class="text-indigo-400 hover:text-indigo-500 transition">Criar uma conta</a></strong>
        </div>
    </div>
</section>

<?php

include('footer.php');

?>
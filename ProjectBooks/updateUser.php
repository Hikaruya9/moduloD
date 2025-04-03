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
if (isset($_POST['update-user-id'])) {
    $query = db()->prepare("SELECT id,name,email FROM users WHERE id = :id");

    $query->execute([
        'id' => $_POST['user-id']
    ]);

    $user = $query->fetch();
}

?>

<section class="flex justify-center items-center min-h-screen bg-gray-900">
    <div class="bg-gray-800 text-white p-8 rounded-lg shadow-lg w-full max-w-lg">
        <h2 class="text-2xl font-bold text-indigo-400 mb-6 text-center">Atualização de usuário</h2>

        <form action="actions.php" method="POST" enctype="multipart/form-data" class="space-y-4">
            <input type="number" name="user-id" min="1" value="<?= $user['id']; ?>" hidden>

            <!-- Novo nome do usuário -->
            <div>
                <label for="new-user-name" class="block text-sm font-medium text-gray-300">Nome</label>
                <input type="text" name="new-user-name" value="<?= $user['name']; ?>" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Novo email do usuário -->
            <div>
                <label for="new-user-email" class="block text-sm font-medium text-gray-300">E-mail</label>
                <input type="email" name="new-user-email" value="<?= $user['email']; ?>" required class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Nova senha do usuário -->
            <div>
                <label for="new-user-pass" class="block text-sm font-medium text-gray-300">Senha</label>
                <input type="password" name="new-user-pass" class="w-full p-3 mt-2 border border-gray-600 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <!-- Botão de Envio -->
            <button type="submit" name="update-user" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition">Atualizar usuário</button>
        </form>
    </div>
</section>

<?php

include('footer.php');

?>
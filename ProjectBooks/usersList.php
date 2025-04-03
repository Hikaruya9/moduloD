<?php

include('protect.php');
include('db.php');
include('header.php');

// Query para buscar os usuários no Banco de Dados
if (!isset($_POST['user-search'])) {
    $query = db()->prepare("SELECT id,name,email FROM users");
    $query->execute();

    $users = $query->fetchAll();
} else {
    $query = db()->prepare("SELECT id,name,email FROM users WHERE name LIKE :search");
    $query->execute([
        'search' => "%" . $_POST['user-search'] . "%"
    ]);

    $users = $query->fetchAll();
}

?>

<div class="pt-10 pb-30">
    <!-- Pesquisa de usuário na tabela -->
    <section class="max-w-7xl mx-auto px-6 py-10">
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <form action="" method="post" class="space-y-4">
                <label for="user-search" class="block text-xl font-semibold text-gray-300">Pesquisar usuário</label>
                <div class="flex space-x-4">
                    <input type="search" name="user-search" placeholder="Nome de usuário..." class="w-full p-3 border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 text-gray-500">
                    <button type="submit" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md hover:bg-indigo-700 transition">Pesquisar</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Tabela de usuários -->
    <section class="max-w-7xl mx-auto px-6 py-10">
        <?php if (count($users) > 0): ?>
            <div class="overflow-x-auto bg-gray-800 p-6 rounded-lg shadow-lg">
                <table class="min-w-full text-left table-auto">
                    <thead>
                        <tr class="bg-gray-700">
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">ID</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">Nome</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">E-mail</th>
                            <th class="px-6 py-4 text-sm font-medium text-gray-300">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr class="border-b border-gray-700">
                                <td class="px-6 py-4"><?= $user['id']; ?></td>
                                <td class="px-6 py-4"><?= $user['name']; ?></td>
                                <td class="px-6 py-4"><?= $user['email']; ?></td>
                                <td class="px-6 py-4">
                                    <form action="updateUser.php" method="post" class="inline-block mb-1">
                                        <input type="number" name="user-id" value="<?= $user['id'] ?>" hidden>
                                        <button type="submit" name="update-user-id" class="px-4 py-2 bg-yellow-500 text-white font-semibold rounded-md hover:bg-yellow-600 transition">Alterar</button>
                                    </form>
                                    <?php if($_SESSION['id'] != $user['id']): ?>
                                    <form action="actions.php" method="post" class="inline-block mt-1">
                                        <input type="number" name="user-id" value="<?= $user['id'] ?>" hidden>
                                        <button type="submit" name="delete-user" class=" pl-6 px-5 py-2 bg-red-500 text-white text-center font-semibold rounded-md hover:bg-red-600 transition">Deletar</button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php else:
            if (isset($_POST['user-search'])): ?>
                <div class="bg-red-100 text-red-600 p-4 rounded-lg">
                    <h2 class="font-bold text-xl">Não foram encontrados usuários com esse nome!</h2>
                </div>
            <?php else: ?>
                <div class="bg-red-100 text-red-600 p-4 rounded-lg">
                    <h2 class="font-bold text-xl">Não há usuários cadastrados no momento!</h2>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </section>
</div>

<?php
include('footer.php');
?>
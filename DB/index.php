<?php

include 'User.php';

$cont = 1;
$users = [];
$selection = 100;
$u = new User();

while ($selection != 0) {

    echo "Opções do menu de cadastro dos usuários:\n";
    echo "0 - Fechar menu\n";
    echo "1 - Cadastrar usuário\n";
    echo "2 - Alterar usuário\n";
    echo "3 - Excluir usuário\n";
    echo "4 - Mostrar todos os usuários\n";
    echo "5 - Buscar usuário por email\n";

    echo "Digite o valor correspondente: ";
    $selection = readLine();


    switch ($selection) {
        case 0:
            echo "Fechando menu...";
            break;
            
        case 1:
            echo "Nome do usuário: ";
            $n = readLine();
            echo "Email do usuário: ";
            $e = readLine();
            echo "Senha do usuário: ";
            $p = readLine();
            $users = $u->insert($n, $e, $p, $users, $cont);
            if ($cont == count($users)) {
                $cont++;
            }

            break;
        case 2:
            echo "ID do usuário a ser alterado: ";
            $id = readLine();
            echo "Nome do usuário: ";
            $name = readLine();
            echo "Email do usuário: ";
            $email = readLine();
            echo "Senha do usuário: ";
            $password = readLine();
            $users = $u->update($id, $name, $email, $password, $users);
            break;

        case 3:
            echo "Digite o id do usuário para exlusão: ";
            $id = readLine();
            $users = $u->delete($id, $users);
            break;

        case 4:
            $u->showAll($users);
            break;

        case 5:
            echo "Digite o email que deseja buscar: ";
            $email = readLine();
            $u->searchByEmail($email, $users);
            break;

        default:
            echo "Opção inválida!\n";
    }
}
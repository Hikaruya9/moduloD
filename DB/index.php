<?php

include 'UserDAO.php';

$selection = 100;
$u = new UserDAO();

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
            $users = $u->insert($n, $e, $p);
            break;

        case 2:
            echo "Email do usuário: ";
            $email = readLine();
            $users = $u->update($email);
            break;

        case 3:
            echo "Digite o email do usuário para exlusão: ";
            $email = readLine();
            $users = $u->delete($email);
            break;

        case 4:
            $u->showAll();
            break;

        case 5:
            echo "Digite o email que deseja buscar: ";
            $email = readLine();
            $u->searchByEmail($email);
            break;

        default:
            echo "Opção inválida!\n";
    }
}
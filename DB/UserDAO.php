<?php

class UserDAO
{

    public function insert($name, $email, $password)
    {
        if (!$this->emailExists($email)) {
            $db = new PDO('sqlite:database.sqlite');
            $query = $db->prepare("INSERT INTO users(name,email,password) VALUES (:name,:email,:password)");
            $query->execute(['name' => $name, 'email' => $email, 'password' => $password]);
            echo "Usuário cadastrado com sucesso!\n";
        } else {
            echo "Email já cadastrado!\n";
        }
    }

    public function update($email)
    {
        if ($this->emailExists($email)) {
            $db = new PDO('sqlite:database.sqlite');
            echo "Digite o dado que deseja alterar no usuário (1-Nome, 2-Email, 3-Senha):\n";
            $res = readLine();

            switch ($res) {
                case 1:
                    echo "Digite o novo nome: ";
                    $n = readLine();
                    $query = $db->prepare("UPDATE users SET name = :name WHERE email = :email");
                    $query->execute(['name' => $n, 'email' => $email]);
                    echo "Nome de usuário atualizado com sucesso!\n";
                    break;
                case 2:
                    echo "Digite o novo email: ";
                    $e = readLine();
                    $query = $db->prepare("UPDATE users SET email = :e WHERE email = :email");
                    $query->execute(['e' => $e, 'email' => $email]);
                    echo "Email de usuário atualizado com sucesso!\n";
                    break;
                case 3:
                    echo "Digite a nova senha: ";
                    $p = readLine();
                    $query = $db->prepare("UPDATE users SET password = :password WHERE email = :email");
                    $query->execute(['password' => $p, 'email' => $email]);
                    echo "Senha de usuário atualizado com sucesso!\n";
                    break;
                default:
                    echo "Valor inválido!\n";
            }
        } else {
            echo "Email não econtrado!\n";
        }
    }

    public function delete($email)
    {
        if ($this->emailExists($email)) {
            $db = new PDO('sqlite:database.sqlite');
            $query = $db->prepare("DELETE FROM users WHERE email = :email");
            $query->execute(['email' => $email]);
            echo "Usuário excluído com sucesso!\n";
        } else {
            echo "Email não encontrado!\n";
        }
    }

    public function showAll()
    {
        $db = new PDO('sqlite:database.sqlite');

        $query = $db->query("SELECT id,name,email,password FROM users");
        $users = $query->fetchAll();

        foreach ($users as $u) {
            echo "=====================================\n";
            echo "ID: " . $u['id'] . "\n";
            echo "Nome: " . $u['name'] . "\n";
            echo "Email: " . $u['email'] . "\n";
            echo "Password: " . $u['password'] . "\n";
            echo "=====================================\n";
        }
    }

    public function searchByEmail($email)
    {
        if ($this->emailExists($email)) {
            $db = new PDO('sqlite:database.sqlite');

            $query = $db->prepare("SELECT id,name,email,password FROM users WHERE email = :email");
            $query->execute(['email' => $email]);
            $user = $query->fetch();

            echo "Usuário encontrado:\n";
            echo "=====================================\n";
            echo "ID: " . $user['id'] . "\n";
            echo "Nome: " . $user['name'] . "\n";
            echo "Email: " . $user['email'] . "\n";
            echo "Password: " . $user['password'] . "\n";
            echo "=====================================\n";
        } else {
            echo "Email não existe!\n";
        }
    }

    public function emailExists($email)
    {
        $db = new PDO('sqlite:database.sqlite');

        $query = $db->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute(['email' => $email]);
        $user = $query->fetch();

        if ($user == null) {
            return false;
        } else {
            return true;
        }
    }
}

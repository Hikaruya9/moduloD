<?php

class User
{
    public $id;
    public $name;
    public $email;
    public $password;

    public function insert($name, $email, $password, $users, $cont)
    {

        if (!$this->checkEmail($email, $users)) {
            echo "Email já cadastrado!\n";
            return $users;
        }

        $u = new User();
        $u->id = $cont;
        $u->name = $name;
        $u->email = $email;
        $u->password = $password;
        $users[] = $u;
        echo "Usuário cadastrado com sucesso!\n";

        return $users;
    }

    public function update($id, $name, $email, $password, $users)
    {
        foreach ($users as $user) {
            if ($user->id == $id) {
                $user->name = $name;
                $user->email = $email;
                $user->password = $password;
                return $users;
            }
        }
        echo "ID não existe!\n";
        return $users;
    }

    public function delete($id, $users)
    {
        if (array_key_exists($id - 1, $users)) {
            unset($users[$id - 1]);
            echo "Usuário excluído com sucesso!\n";
        } else {
            echo "ID não existe!\n";
        }
        return $users;
    }

    public function showAll($users)
    {
        foreach ($users as $u) {
            echo "=====================================\n";
            echo "ID: " . $u->id . "\n";
            echo "Nome: " . $u->name . "\n";
            echo "Email: " . $u->email . "\n";
            echo "Password: " . $u->password . "\n";
            echo "=====================================\n";
        }
    }

    public function searchByEmail($email, $users)
    {
        foreach ($users as $user) {
            if ($user->email == $email) {
                $u = $user;
                echo "Usuário encontrado:\n";
                echo "=====================================\n";
                echo "ID: " . $u->id . "\n";
                echo "Nome: " . $u->name . "\n";
                echo "Email: " . $u->email . "\n";
                echo "Password: " . $u->password . "\n";
                echo "=====================================\n";
            } elseif ($user->id == count($users)) {
                echo "Email não existe!\n";
            }
        }
    }

    public function checkEmail($email, $users)
    {
        foreach ($users as $u) {
            if ($u->email == $email) {
                return false;
            }
        }
        return true;
    }
}

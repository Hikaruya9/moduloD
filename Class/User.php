<?php

class User
{
    public $id;
    public $name;
    public $email;
    public $password;

    public function insert($name, $email, $password, $users, $cont)
    {

        foreach($users as $u){
            if($u->email == $email){
                echo "Email já existe!\n";
                return $users;
            }
        }

        $u = new User();
        $u->id = $cont;
        $u->name = $name;
        $u->email = $email;
        $u->password = $password;
        $users[] = $u;
    }

    public function update($id, $name, $email, $password, $users)
    {
        if (array_key_exists($id - 1, $users)) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        } else {
            echo "ID não existe!\n";
        }
    }

    public function delete($id, $users)
    {
        if (array_key_exists($id - 1, $users)) {
            unset($users[$id - 1]);
        } else {
            echo "ID não existe!\n";
        }
    }

    public function showAll($users)
    {
        foreach($users as $u){
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
        if (in_array($email, $users)) {
            print_r($users[array_search($email, $users)]);
        } else {
            echo "Email não existe!\n";
        }
    }
}
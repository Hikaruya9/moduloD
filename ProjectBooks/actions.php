<?php

include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['form'])) {
    if (strlen($_POST['title']) == 0) {
        header('Location: form.php');
        exit();
    } elseif (strlen($_POST['author']) == 0) {
        header('Location: form.php');
        exit();
    } elseif (strlen($_POST['desc']) == 0) {
        header('Location: form.php');
        exit();
    } else {

        $query = db()->prepare("INSERT INTO books(title, author, desc) VALUES (:title, :author, :desc)");

        $query->execute([
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'desc' => $_POST['desc']
        ]);

        header('Location: index.php');
    }
}

if (isset($_POST['signIn'])) {
    if (strlen($_POST['name']) == 0) {
        // $_SESSION['message'] = "Preencha o nome de usuário";
        header('Location: signIn.php');
        exit();
    } elseif (strlen($_POST['email']) == 0) {
        header('Location: signIn.php');
        exit();
    } elseif (strlen($_POST['password']) == 0) {
        header('Location: signIn.php');
        exit();
    } else {

        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = db()->prepare("INSERT INTO users(name, email, password) VALUES (:name, :email, :password)");

        $query->execute([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $pass
        ]);

        header('Location: login.php');
    }
}

if (isset($_POST['signUp'])) {
    if (strlen($_POST['email']) == 0) {
        header('Location: signUp.php');
        exit();
    } elseif (strlen($_POST['password']) == 0) {
        header('Location: signUp.php');
        exit();
    } else {

        $query = db()->prepare("SELECT * FROM users WHERE email = :email");

        $query->execute([
            'email' => $_POST['email']
        ]);

        $user = $query->fetch();

        if (password_verify($_POST['password'], $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['password'] = $user['password'];
            header('Location: panel.php');
        } else {
            $_SESSION['message'] = "Email ou senha inválidos!";
            header('Location: signUp.php');
        }
    }
}

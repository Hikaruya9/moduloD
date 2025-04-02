<?php

include('db.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['submit-book'])) {
    if (strlen($_POST['title']) == 0) {
        header('Location: submitBook.php');
        exit();
    } elseif (strlen($_POST['author']) == 0) {
        header('Location: submitBook.php');
        exit();
    } elseif (strlen($_POST['desc']) == 0) {
        header('Location: submitBook.php');
        exit();
    } elseif (!isset($_FILES['cover'])) {
        header('Location: submitBook.php');
        exit();
    } else {
        $fileName = $_FILES['cover']['name'];
        $tmp_name = $_FILES['cover']['tmp_name'];

        $extesion = pathinfo($fileName, PATHINFO_EXTENSION);
        if ($extesion != 'png' && $extesion != 'jpg'  && $extesion != 'jpeg') {
            die('Aceitamos apenas imagens em formato png, jpg ou jpeg!<br><a href="submitBook.php">Voltar</a>');
        }

        $newFileName = uniqid() . '.' . $extesion;
        move_uploaded_file($tmp_name, 'covers/' . $newFileName);

        $query = db()->prepare("INSERT INTO books(title, author, desc, cover, contribuitor) VALUES (:title, :author, :desc, :cover, :contribuitor)");

        $query->execute([
            'title' => $_POST['title'],
            'author' => $_POST['author'],
            'desc' => $_POST['desc'],
            'cover' => $newFileName,
            'contribuitor' => $_SESSION['id']
        ]);

        header('Location: booksList.php');
    }
}

if (isset($_POST['delete-book'])) {
    $query = db()->prepare("DELETE FROM books WHERE id = :id");

    $query->execute([
        'id' => $_POST['book-id']
    ]);

    header('Location: booksList.php');
}

if (isset($_POST['update-book'])) {
    if (strlen($_POST['title']) == 0) {
        header('Location: submitBook.php');
        exit();
    } elseif (strlen($_POST['author']) == 0) {
        header('Location: submitBook.php');
        exit();
    } elseif (strlen($_POST['desc']) == 0) {
        header('Location: submitBook.php');
        exit();
    } elseif (!isset($_FILES['cover'])) {
        header('Location: submitBook.php');
        exit();
    } else {

        if(){

        } else {

            $fileName = $_FILES['cover']['name'];
            $tmp_name = $_FILES['cover']['tmp_name'];

            $extesion = pathinfo($fileName, PATHINFO_EXTENSION);
            if ($extesion != 'png' && $extesion != 'jpg'  && $extesion != 'jpeg') {
                die('Aceitamos apenas imagens em formato png, jpg ou jpeg!<br><a href="updateBook.php">Voltar</a>');
            }

            $newFileName = uniqid() . '.' . $extesion;
            move_uploaded_file($tmp_name, 'covers/' . $newFileName);
        }
        

        $query = db()->prepare("UPDATE books SET title = :title, author = :author, desc = :desc, cover = :cover WHERE id = :id");

        $query->execute([
            'title' => $_POST['new-book-title'],
            'author' => $_POST['new-book-author'],
            'desc' => $_POST['new-book-desc'],
            'id' => $_POST['book-id']
        ]);

        header('Location: booksList.php');
    }
}

if (isset($_POST['sign-in'])) {
    if (strlen($_POST['name']) == 0) {
        $_SESSION['message'] = "Preencha o nome de usuário!";
        header('Location: signIn.php');
        exit();
    } elseif (strlen($_POST['email']) == 0) {
        $_SESSION['message'] = "Você precisa preencher com um email válido!";
        header('Location: signIn.php');
        exit();
    } elseif (strlen($_POST['password']) == 0) {
        $_SESSION['message'] = "Você precisa criar uma senha!";
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

if (isset($_POST['sign-up'])) {
    if (strlen($_POST['email']) == 0) {
        $_SESSION['message'] = "Insira um email para entrar!";
        header('Location: signUp.php');
        exit();
    } elseif (strlen($_POST['password']) == 0) {
        $_SESSION['message'] = "Insira uma senha para entrar!";
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

<?php

include('db.php');

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
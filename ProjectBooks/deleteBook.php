<?php

include('db.php');

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id'])){
    $query = db()->prepare("DELETE FROM books WHERE id = :id");

    $query->execute([
        'id' => $_GET['id']
    ]);
}

header('Location: booksList.php');

?>
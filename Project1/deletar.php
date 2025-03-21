<?php

include('db.php');

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['id'])){

    $id = ($_SESSION['id']);

    $query = db()->prepare("DELETE FROM usuarios WHERE id = :id");
    $query->execute(['id' => $id]);

}

header('Location: index.php');
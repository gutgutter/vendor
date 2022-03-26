<?php

    require_once 'connection.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE `goods` SET `title` = '$title', 
        `description` = '$description', `price` = '$price' WHERE `goods`.`id` = '$id'";

    mysqli_query($connect, $sql);

    header('Location: ../index.php');
    
?>
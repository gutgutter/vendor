<?php
    require_once 'connection.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price']; 

    $sql = "INSERT INTO `goods` (`id`, `title`, `description`, `price`) 
        VALUES (null, '$title', '$description', '$price')";

    mysqli_query($connect, $sql);

    header('Location: ../index.php');
?>

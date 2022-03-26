<?php
    require_once 'connection.php';

    $title = mysqli_real_escape_string($connect, $_REQUEST['title']);
    $description = mysqli_real_escape_string($connect, $_REQUEST['description']);
    $price = mysqli_real_escape_string($connect, $_REQUEST['price']);  

    $sql = "INSERT INTO `goods` (`id`, `title`, `description`, `price`) 
        VALUES (null, '$title', '$description', '$price')";

    mysqli_query($connect, $sql);

    header('Location: ../index.php');
?>

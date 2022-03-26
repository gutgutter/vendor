<?php 

    require_once 'connection.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `goods` where `goods`.`id`='$id'");

    header('Location: ../index.php');

?>
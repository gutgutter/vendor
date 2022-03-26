<?php

    $connect = mysqli_connect("localhost", "root", "", "vendor");
    if(!$connect) {
        die("Connection error".mysqli_connect_error());
    }

?>
<?php
    $host = 'localhost';
    $us   = 'root';
    $pass = '';
    $db   = 'doan';

    $conn = mysqli_connect($host, $us, $pass, $db);
    if($conn == null){
        echo 'connect fail!';
    }
?>
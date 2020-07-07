<?php

    include '../../db_connect.php';

    session_start();
    $username = trim($_POST['username'], " ");
    $password = trim($_POST['password'], " ");

    $sql = "SELECT * FROM khachhang WHERE taikhoan = '$username' and matkhau = '$password'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    if($row != null){
        // echo $row['tenkh'];
        $_SESSION["userid"] = $row['makh'];
        $_SESSION["user"] = $row['tenkh'];
        header("Location: /luli/");
    }
    else{
        header("Location: ../login.php");
    }

?>
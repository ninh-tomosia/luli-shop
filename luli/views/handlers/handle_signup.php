<?php
    include '../../db_connect.php';

    session_start();
    $name = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $sdt = $_POST['phone'];
    $pass = $_POST['password'];
    $diachi = $_POST['address'];

    $sql = "INSERT INTO khachhang(tenkh, diachi, sodienthoai, email, taikhoan, matkhau) 
            VALUES('$name', '$diachi', '$sdt', '$email', '$username', '$pass')";
    $rs = mysqli_query($conn, $sql);
    if($rs){

        $qr = "SELECT * FROM khachhang WHERE taikhoan = '$username' and matkhau = '$pass'";
        $rs = mysqli_query($conn, $qr);
        $row = mysqli_fetch_array($rs);
        if($row != null){
            echo $row['tenkh'];
            $_SESSION["userid"] = $row['makh'];
            $_SESSION["user"] = $row['tenkh'];
            header("Location: /luli/");
        }
        header("location: /luli/");
    }else{
        header("location: ../sign-up.php");
    }

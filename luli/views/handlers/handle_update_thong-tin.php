<?php
    include '../../db_connect.php';
    $id = $_POST['txtmakh'];
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $sdt = $_POST['txtsdt'];
    $diachi = $_POST['txtaddr'];

    session_start();

    $sql = "UPDATE khachhang SET tenkh = '$name', email = '$email', sodienthoai = '$sdt', diachi = '$diachi' WHERE makh = '$id'";

    $rs = mysqli_query($conn, $sql);
    if($rs){
        $_SESSION["userid"] = $id;
        $_SESSION["user"] = $name;
        header("location: ../thong-tin.php?id=$id");
    }else{
        header("location: ../thong-tin.php?id=$id");
    }

?>
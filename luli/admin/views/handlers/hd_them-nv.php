<?php
    include '../../../db_connect.php';
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $sdt = $_POST['txtsdt'];
    $diachi = $_POST['txtaddr'];
    $tk = $_POST['txttk'];
    $pass = $_POST['txtpass'];
    $photo = $_FILES['photo']['name'];
    $trangthai = $_POST['trangthai'];
    $quyen = $_POST['quyen'];
    

    include '../../../common/upload_file.php';
    // echo $id." ".$diachi." ".$email." ".$sdt." ".$name; 
    session_start();

    $sql = "INSERT INTO nhanvien(tennv, sodienthoai, taikhoan, matkhau, email, diachi, quyen, hinhanh)
            VALUES('$name', '$sdt', '$tk', '$pass', '$email', '$diachi', '$quyen', '$photo')";

    $rs = mysqli_query($conn, $sql);
    if($rs){
        header("location: ../danh-sach-nhan-vien.php");
    }else{
        header("location: ../them-nhan-vien.php");
    }
?>
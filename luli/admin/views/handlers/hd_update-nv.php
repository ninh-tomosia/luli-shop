<?php
    include '../../../db_connect.php';
    $id = $_POST['txtmanv'];
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $sdt = $_POST['txtsdt'];
    $diachi = $_POST['txtaddr'];
    $photo = $_FILES['photo']['name'];
    $trangthai = $_POST['trangthai'];
    $quyen = $_POST['quyen'];
    

    include '../../../common/upload_file.php';
    // echo $id." ".$diachi." ".$email." ".$sdt." ".$name; 
    session_start();

    $sql = "UPDATE nhanvien SET tennv = '$name', email = '$email', sodienthoai = '$sdt',
        diachi = '$diachi', hinhanh = '$photo', trangthai = '$trangthai', quyen = '$quyen' WHERE manv = '$id'";

    $rs = mysqli_query($conn, $sql);
    if($rs){
        header("location: ../danh-sach-nhan-vien.php");
    }else{
        header("location: ../cap-nhat-nhan-vien.php?id=$id");
    }
?>
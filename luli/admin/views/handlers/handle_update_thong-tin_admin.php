<?php
    include '../../../db_connect.php';
    $id = $_POST['txtmanv'];
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $sdt = $_POST['txtsdt'];
    $diachi = $_POST['txtaddr'];
    $photo = $_FILES['photo']['name'];
    

    include '../../../common/upload_file.php';
    // echo $id." ".$diachi." ".$email." ".$sdt." ".$name; 
    session_start();

    $sql = "UPDATE nhanvien SET tennv = '$name', email = '$email', sodienthoai = '$sdt', diachi = '$diachi', hinhanh = '$photo' WHERE manv = '$id'";

    $rs = mysqli_query($conn, $sql);
    if($rs){
        $_SESSION["hinhanh_admin"] = $photo;
        $_SESSION["admin"] = $name;
        header("location: ../thong-tin.php?id=$id");
    }else{
        header("location: ../thong-tin.php?id=$id");
    }

?>
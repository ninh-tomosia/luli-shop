<?php
session_start();
include '../../../db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$cfpassword = $_POST['cf_password'];
$sql = "UPDATE nhanvien SET matkhau = '$password' WHERE taikhoan = '$username'";
if ($password == $cfpassword) {
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        include './handle_login_admin.php';
    } else {
        header("Location: /luli/admin/forgot-password.php");
    }
} else {
    header("Location: /luli/admin/forgot-password.php");
}
?>
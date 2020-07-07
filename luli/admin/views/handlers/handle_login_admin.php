<?php
include '../../../db_connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM nhanvien WHERE taikhoan = '$username' and matkhau = '$password'";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);
if ($row != null) {
    if ($row['quyen'] == 1) {
        session_start();
        $_SESSION["adminid"] = $row['manv'];
        $_SESSION["admin"] = $row['tennv'];
        $_SESSION["admin_email"] = $row['email'];
        $_SESSION["hinhanh_admin"] = $row['hinhanh'];
        header("Location: /luli/admin/views/");
    }else{
        header("Location: /luli/admin/");
    }
} else {
    header("Location: /luli/admin/");
}
?>
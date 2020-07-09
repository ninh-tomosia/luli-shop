<?php
include '../../../db_connect.php';
try {
    if (isset($_POST['masp'], $_POST['mota'], $_POST['trangthai'])) {
        $mabd = $_POST['mabd'];
        $masp = $_POST['masp'];
        $noidung = $_POST['mota'];
        $trangthai = $_POST['trangthai'];
        echo $trangthai;
        $sql = "UPDATE baidang SET masp = '$masp', noidung = '$noidung', trangthai_db = '$trangthai' WHERE mabaidang = '$mabd'";

        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            header("location: /luli/admin/views/danh-sach-bai-dang.php");
        } else {
            header("location: /luli/admin/views/cap-nhat-bai-dang.php?id='$mabd'");
        }
    } else {
        echo "khong co du lieu truyen vao";
    }
} catch (Exception $e) {
    echo "khong the them san pham";
}
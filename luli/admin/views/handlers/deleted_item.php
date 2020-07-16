<?php
    include '../../../db_connect.php';
    session_start();
    $id = $_REQUEST['id'];
    $table = $_REQUEST['tb'];
    
    echo $id;
    echo $_SESSION["adminid"];
    if(isset($_SESSION["adminid"])){
        switch($table){
            case "nv":
                $sql = "UPDATE nhanvien SET trangthai = 'false' WHERE manv = '$id'";
                if ($_SESSION["adminid"] == $id) {
                    header("location: /luli/admin/views/danh-sach-nhan-vien.php");
                } else {
                    $rs = mysqli_query($conn, $sql);
                    if ($rs) {
                        header("location: /luli/admin/views/danh-sach-nhan-vien.php");
                    } else {
                        header("location: /luli/admin/views/danh-sach-nhan-vien.php");
                    }
                }
                break;
            case "sp":
                $sql = "UPDATE sanpham SET trangthai = 'false' WHERE masp = '$id'";
                $rs = mysqli_query($conn, $sql);
                if ($rs) {
                    header("location: /luli/admin/views/danh-sach-san-pham.php");
                } else {
                    header("location: /luli/admin/views/danh-sach-san-pham.php");
                }
                break;
            case "bd":
                $sql = "UPDATE baidang SET trangthai_db = 'false' WHERE mabaidang = '$id'";
                $rs = mysqli_query($conn, $sql);
                if ($rs) {
                    header("location: /luli/admin/views/danh-sach-bai-dang.php");
                } else {
                    header("location: /luli/admin/views/danh-sach-bai-dang.php");
                }
                break;
            case "dh":
            {
                $sql = "UPDATE donhang SET trangthaidh = 0, tinhtrangdonhang = 3 WHERE madonhang = $id";
                $rs = mysqli_query($conn, $sql);
                if ($rs) {
                    header("location: /luli/admin/views/don-hang.php");
                } else {
                    header("location: /luli/admin/views/don-hang.php");
                }
                break;
            }
        }
    }else{
        header("location: /luli/admin/");
    }

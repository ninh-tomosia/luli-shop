<?php
include '../../../db_connect.php';
try{
    include '../../../common/upload_file.php';
    if(isset($_POST['tensp'], $_POST['gia'], $_POST['soluong'], $_POST['loaisp'], $_POST['nhacc'], $_FILES['photo']['name'])){
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $soluong = $_POST['soluong'];
        $loaisp = $_POST['loaisp'];
        $nhacc = $_POST['nhacc'];
        $hinhanh = $_FILES['photo']['name'];
        $masp = "SP".mt_rand();
        $sql = "INSERT INTO sanpham(masp, tensp, soluong, gia, sohiencon, anh, nhacungcap, loaisanpham, trangthai)
                VALUES('$masp', '$tensp', '$soluong', '$gia', '$soluong', '$hinhanh', '$nhacc', '$loaisp', 1)";

        $rs = mysqli_query($conn, $sql);
        if($rs){
            header("location: /luli/admin/views/danh-sach-san-pham.php");
        }else{
            header("location: /luli/admin/views/them-san-pham.php");
        }
    }else{
        echo "khong co du lieu truyen vao";
    }
}catch(Exception $e){
    echo "khong the them san pham";
}

?>
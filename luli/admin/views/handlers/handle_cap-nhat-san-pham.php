<?php
include '../../../db_connect.php';
try{
    if(isset($_FILES['photo']) != null){
        include '../../../common/upload_file.php';
    }
    if(isset($_POST['tensp'], $_POST['gia'], $_POST['loaisp'], $_POST['nhacc'], $_POST['trangthai'])){
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $sl = $_POST['soluong'];
        $loaisp = $_POST['loaisp'];
        $nhacc = $_POST['nhacc'];
        
        $trangthai = $_POST['trangthai']; 
        $masp = $_POST['masp'];
        $sl_sp = "SELECT * FROM sanpham WHERE masp = '$masp'";
        $rs_sp = mysqli_query($conn, $sl_sp);
        $sp = mysqli_fetch_assoc($rs_sp);
        $soluong = $sp['soluong'] + $sl;
        $sohc = $sp['sohiencon'] + $sl;

        if (isset($_FILES['photo']['name']) == true) {
            $hinhanh = $_FILES['photo']['name'];
            $sql = "UPDATE sanpham SET tensp = '$tensp', soluong = '$soluong', sohiencon = '$sohc', gia = '$gia',
                anh = '$hinhanh', nhacungcap = '$nhacc', loaisanpham = '$loaisp', trangthai = '$trangthai'
                WHERE masp = '$masp'";
        }else{
            $sql = "UPDATE sanpham SET tensp = '$tensp', soluong = '$soluong', sohiencon = '$sohc', gia = '$gia',
                nhacungcap = '$nhacc', loaisanpham = '$loaisp', trangthai = '$trangthai'
                WHERE masp = '$masp'";
        }

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

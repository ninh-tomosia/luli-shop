<?php
include '../../../db_connect.php';
try{
    if(isset($_FILES['photo']) != null){
        include '../../../common/upload_file.php';
    }
    if(isset($_POST['tensp'], $_POST['gia'], $_POST['soluong'], $_POST['loaisp'], $_POST['nhacc'], $_POST['sohc'], $_POST['trangthai'])){
        $tensp = $_POST['tensp'];
        $gia = $_POST['gia'];
        $soluong = $_POST['soluong'];
        $sohc = $_POST['sohc'];
        $loaisp = $_POST['loaisp'];
        $nhacc = $_POST['nhacc'];
        
        $trangthai = $_POST['trangthai']; 
        $masp = $_POST['masp'];
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

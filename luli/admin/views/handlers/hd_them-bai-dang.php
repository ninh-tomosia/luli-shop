<?php
include '../../../db_connect.php';
try{
    if(isset($_POST['masp'], $_POST['mota'])){
        $masp = $_POST['masp'];
        $noidung = $_POST['mota'];
        $ngaydang = date("Y-m-d H:m:s", time());
        echo $ngaydang;
        
        $sql = "INSERT INTO baidang(masp, ngaydang, noidung, trangthai_db)
                VALUES('$masp', '$ngaydang', '$noidung', 1)";

        $rs = mysqli_query($conn, $sql);
        if($rs){
            header("location: /luli/admin/views/danh-sach-bai-dang.php");
        }else{
            header("location: /luli/admin/views/them-bai-dang.php");
        }
    }else{
        echo "khong co du lieu truyen vao";
    }
}catch(Exception $e){
    echo "khong the them san pham";
}

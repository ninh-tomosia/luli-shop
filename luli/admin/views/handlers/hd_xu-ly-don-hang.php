<?php
    include '../../../db_connect.php';
    $madh = $_POST['madh'];
    $tinhtrang = $_POST['tinhtrang'];
    if($tinhtrang == 3){
        $sql = "UPDATE donhang SET trangthaidh = 0, tinhtrangdonhang = 3 WHERE madonhang = $madh";
    }else{
        $sql = "UPDATE donhang SET tinhtrangdonhang = '$tinhtrang' WHERE madonhang = $madh";
    }
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        header("location: /luli/admin/views/don-hang.php");
    } else {
        header("location: /luli/admin/views/don-hang.php");
    }
?>
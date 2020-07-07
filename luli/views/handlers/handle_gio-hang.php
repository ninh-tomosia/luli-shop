<?php
    include '../../db_connect.php';
    session_start();
    $total = 0;
    $id = $_REQUEST['id'];
    $sl = $_REQUEST['sl'];

    echo $id;
    echo $sl;

    $sql = "SELECT * FROM sanpham WHERE masp = '$id'";

    if(isset($id)){
        $rs = mysqli_query($conn, $sql);
        if($rs != null){
            $row = mysqli_fetch_array($rs);
            if (!isset($_SESSION["cart_shoes"][$id])) {
                $_SESSION["cart_shoes"][$id] = array(
                    "name" => $row['tensp'],
                    "soluong" => $sl,
                    "gia" => $row['gia'],
                    "hinhanh" => $row['anh'],
                    "masp" => $id
                );
            } else {
                $_SESSION["cart_shoes"][$id]["soluong"] += $sl;
            }
            header("Location: /luli/views/gio-hang.php");
        }else{
            header("Location: " . $_SERVER["HTTP_REFERER"]);
        }

    }else{
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>
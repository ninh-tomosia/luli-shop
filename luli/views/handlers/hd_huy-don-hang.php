<?php
session_start();
if ($_SESSION['userid'] == null) {
    header("location: /luli/views/login.php");
} else {
    include '../../db_connect.php';
    $makh = $_SESSION['userid'];
    $key = $_REQUEST['key'];
    switch ($key) {

        case "all": {
                $sl_sp = "SELECT * FROM donhang WHERE makh = '$makh' AND trangthaidh = 1 AND tinhtrangdonhang = 1";
                $res = mysqli_query($conn, $sl_sp);
                while ($dh = mysqli_fetch_array($res)) {
                    $madh = $dh['madonhang'];
                    $sl_ct = "SELECT * FROM chitietdonhang WHERE madh = '$madh'";
                    $res_ct = mysqli_query($conn, $sl_ct);
                    while ($ct = mysqli_fetch_array($res_ct)) {
                        $masp = $ct['masp'];
                        $sl = $ct['soluong'];
                        $sl_shc = "SELECT * FROM sanpham WHERE masp = '$masp'";
                        $rs_shc = mysqli_query($conn, $sl_shc);
                        $r_shc = mysqli_fetch_assoc($rs_shc);
                        $shc = $r_shc['sohiencon'];
                        $tong = $shc + $sl;
                        // echo $shc;
                        $u_sp = "UPDATE sanpham SET sohiencon = '$tong' WHERE masp = '$masp'";
                        $rs_upsp = mysqli_query($conn, $u_sp);
                    }
                    $sql = "UPDATE donhang SET trangthaidh = 0, tinhtrangdonhang = 3 WHERE madonhang = '$madh'";
                    $rs = mysqli_query($conn, $sql);
                }
                header("location: /luli/views/thong-tin-don-hang.php");
                break;
            }

        case "item": {
                $madh = $_REQUEST['madh'];
                // echo $madh;
                $sl_ct = "SELECT * FROM chitietdonhang WHERE madh = '$madh'";
                $res_ct = mysqli_query($conn, $sl_ct);
                while ($ct = mysqli_fetch_array($res_ct)) {
                    $masp = $ct['masp'];
                    $sl = $ct['soluong'];
                    $sl_shc = "SELECT * FROM sanpham WHERE masp = '$masp'";
                    $rs_shc = mysqli_query($conn, $sl_shc);
                    $r_shc = mysqli_fetch_assoc($rs_shc);
                    $shc = $r_shc['sohiencon'];
                    $tong = $shc + $sl;
                    // echo $shc;
                    $u_sp = "UPDATE sanpham SET sohiencon = '$tong' WHERE masp = '$masp'";
                    $rs_upsp = mysqli_query($conn, $u_sp);
                }
                $sql = "UPDATE donhang SET trangthaidh = 0, tinhtrangdonhang = 3 WHERE madonhang = '$madh'";
                $rs = mysqli_query($conn, $sql);
                header("location: /luli/views/thong-tin-don-hang.php");

                break;
            }
        }
    }
?>
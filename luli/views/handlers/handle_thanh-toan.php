<?php
session_start();
include '../../db_connect.php';
if (isset($_POST['idkh'])) {
    if (!isset($_POST['pttt'])) {
        echo "chưa chọn pt thanh toán";
        header("location: /luli/views/thanh-toan.php");
    } else {
        $idkh = $_POST['idkh'];
        $matt = $_POST['pttt'];
        $tongtien = $_POST['tongtien'];
        echo "Ma thanh toan " . $matt;
        #Tạo ngày đặt - lấy ngày hiện tại
        $n_dat = date("Y-m-d", time());
        #Tạo ngày giao - lấy ngày hiện tại cộng thêm 7
        $n_giao = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 7, date("Y")));

        $sql = "INSERT INTO donhang(ngaydat, ngaygiao, makh, tongtien) 
            VALUES('$n_dat', '$n_giao', '$idkh', '$tongtien')";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            $madh = $conn->insert_id;
            if (isset($_SESSION["cart"][$idkh])) {

                $products = $_SESSION["cart"][$idkh];
                foreach ($products as $item) {
                    $masp = $item["masp"];
                    $sl = $item["soluong"];
                    $tt = $item["gia"] * $item["soluong"];
                    $qrs = "SELECT * FROM sanpham WHERE masp = '$masp'";
                    $ress = mysqli_query($conn, $qrs);
                    $sanpham = mysqli_fetch_array($ress);
                    if ($sanpham['sohiencon'] > $sl) {
                        $query = "INSERT INTO chitietdonhang(madh, masp, soluong, thanhtien, size, ngaydat)
                        VALUES('$madh', '$masp', '$sl', '$tt', 35, '$n_dat')";
                        $result = mysqli_query($conn, $query);
                        if ($result) {
                            $shc = $sanpham['sohiencon'] - $sl;
                            $usp = "UPDATE sanpham SET sohiencon = '$shc' WHERE masp = '$masp'";
                            $result_update = mysqli_query($conn, $usp);
                            if ($result_update) {
                                echo "update thanh cong";
                            } else {
                                echo "update that bai";
                            }
                        } else {
                            echo "khong dat duoc hang nay";
                        }
                    } else {
                        echo "so luong da het";
                    }
                }
            }
            // $true = true;
            $qr = "INSERT INTO chitietthanhtoan(madh, mathanhtoan, ngaythanhtoan, trangthai)
                VALUES('$madh', '$matt', '$n_dat', 1)";
            $res = mysqli_query($conn, $qr);
            if ($res) {
                echo "thanh toan thanh cong";
                unset($_SESSION["cart"][$idkh]);
                unset($_SESSION["cart_shoes"]);
                header("location: /luli/views/dat-hang.php");
            } else {
                echo "thanh toan khong thanh cong";
                // echo $res;
                header("location: /luli/views/gio-hang.php");
            }
        } else {
            echo "dat hang khong thanh cong";
        }
    }
} else {
    echo 'Chưa đăng nhập';
    header("location: /luli/views/login.php");
}

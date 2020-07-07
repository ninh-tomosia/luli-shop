<?php
session_start();
include '../../db_connect.php';
if ($_POST['idkh'] != null) {
    $idkh = $_POST['idkh'];
    #Tạo ngày đặt - lấy ngày hiện tại
    $n_dat = date("Y-m-d", time());
    #Tạo ngày giao - lấy ngày hiện tại cộng thêm 7
    $n_giao = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 7, date("Y")));

    $sql = "INSERT INTO donhang(ngaydat, ngaygiao, makh) VALUES('$n_dat', '$n_giao', '$idkh')";
    $rs = mysqli_query($conn, $sql);
    if ($rs) {
        $madh = $conn->insert_id;
        if (isset($_SESSION["cart"][$idkh])) {
            
            $products = $_SESSION["cart"];
            foreach ($products as $item) {
                $masp = $item["masp"];
                $sl = $item["soluong"];
                $tt = $item["thanhtien"];
                $query = "INSERT INTO chitietdonhang(madonhang, masp, soluong, thanhtien)
                    VALUES('$madh', '$masp', '$sl', '$tt')";
                $result = mysqli_query($conn, $query);
            }
        }
        $_SESSION["donhang"] = array(
            "madh" => $madh,
            "makh" => $idkh
        );
        echo "Đã đăt hàng!";
        header("location: /luli/views/thanh-toan.php");
    }
} else {
    echo 'Chưa đăng nhập';
    header("location: /luli/views/login.php");
}

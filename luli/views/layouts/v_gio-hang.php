<div class="colorlib-product">
    <div class="container" style="margin-top: 130px;">
        <?php
        // session_start();
        if (isset($_SESSION["cart_shoes"]) != null) {
            $tongTien = 0;
        ?>
            <form action="/luli/views/handlers/handle_thanh-toan.php" method="POST">
                <input type="text" value="<?php if (isset($_SESSION["userid"])) {
                                                $idkh = $_SESSION["userid"];
                                                echo $idkh;
                                            } ?>" name="idkh" hidden>
                <table style="width: 100%;">
                    <p style="text-align: right; padding-bottom: 0px; margin-bottom: 0px;">
                        <a href="/luli/views/handlers/handle_deleted_cart_item.php?id=''&delete=all" style="color: red;">Xóa tất cả</a>
                    </p>
                    <h6 style="text-align: center; font-weight: 600; color: black; background: silver; padding: 10px 20px; text-transform: uppercase;">
                        Giỏ hàng của bạn
                    </h6>
                    <?php foreach ($_SESSION["cart_shoes"] as $i) {
                        $thanhTien = $i["gia"] * $i["soluong"];
                        $tongTien += $thanhTien;
                        $_SESSION["cart"] = array(                           
                            "masp" => $i["masp"],
                            "soluong" => $i["soluong"], 
                            "thanhtien" => $thanhTien,
                            "gia" => $i["gia"],
                            "hinhanh" => $i["hinhanh"]
                        );
                    ?>
                        <tr>
                            <td style="width: 500px;"><?php echo $i["name"]; ?></td>
                            <td style="width: 80px;">
                                <?php if (substr($i["hinhanh"], 0, 4) == "http") { ?>
                                    <img src="<?php echo $i["hinhanh"]; ?>" alt="no image" width="80px" height="80px">
                                <?php } else { ?>
                                    <img src="../../upload/<?php echo $i["hinhanh"]; ?>" alt="no image">
                                <?php } ?>
                            </td>
                            <td style="width: 200px; text-align: center;">
                                <?php echo $i["soluong"]; ?>
                            </td>
                            <td>
                                <?php echo number_format($i["gia"]) . "VND"; ?>
                            </td>
                            <td>
                                <?php echo number_format($thanhTien) . "VND"; ?>
                            </td>
                            <td>
                                <a style="color: red;" href="/luli/views/handlers/handle_deleted_cart_item.php?id=<?php echo $i["masp"]; ?>&delete=item">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <td colspan="7">
                        <hr>
                    </td>
                    <tr>
                        <td colspan="7" style="text-align: right; color: black; font-weight: 600;">Tổng tiền: <?php echo number_format($tongTien); ?>VND</td>
                    </tr>
                    <tr>
                        <td colspan="7" style="text-align: right;">
                            <button class="btn btn-thanh-toan" type="submit">Thanh toán</button>
                        </td>
                    </tr>
                </table>
            </form>
        <?php } else { ?>
            <h4 style="text-align: center; background: #FF9966; padding: 10px 20px;">Không có sản phẩm nào trong giỏ hàng</h4>

        <?php } ?>
    </div>
</div>
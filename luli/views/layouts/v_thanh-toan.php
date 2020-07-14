<form action="/luli/views/handlers/handle_thanh-toan.php" method="POST">
    <?php if (isset($_SESSION["userid"])) {
        $idkh = $_SESSION["userid"];
    ?>
        <input type="text" value="<?php echo $idkh; ?>" name="idkh" hidden>

        <?php

        $_SESSION["cart"][$idkh] = $_SESSION["cart_shoes"];

        if (isset($_SESSION["cart_shoes"]) != null) {
            $tongTien = 0;
            foreach ($_SESSION["cart_shoes"] as $i) {
                $thanhTien = $i["gia"] * $i["soluong"];
                $tongTien += $thanhTien;
            }
        ?>
            <input type="text" value="<?php echo $tongTien; ?>" name="tongtien" hidden>
            <div class="colorlib-product">
                <div class="container" style="margin-top: 150px;">
                    <h2 style="text-align: center; text-transform: uppercase; font-weight: 700;">Thông tin đơn hàng</h2>
                    <div class="order-inf" style="width: 100%;">
                        <div style="width: 50%;
                    padding: 10px 20px;
                    margin-left: 200px">
                            <h4>Thông tin đơn hàng</h4>
                            <table>
                                <tr>
                                    <td>Tổng số sản phẩm:</td>
                                    <td><?php echo $count; ?></td>
                                </tr>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <td style="color: red; font-size: 18px; font-weight: 600;"><?php echo number_format($tongTien); ?>VND</td>
                                </tr>
                            </table>
                        </div>
                        <div style="width: 50%; clear: both;">
                            <h4>Chọn phương thức thanh toán: </h4>
                            <table class="pttt">
                                <?php
                                $sql = "SELECT * FROM hinhthucthanhtoan";
                                $rs = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($rs)) { ?>
                                    <tr>
                                        <td>
                                            <input type="radio" name="pttt" value="<?php echo $row['mathanhtoan']; ?>"><label for=""><?php echo $row['tenphuongthuc']; ?></label>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                    <div style="margin: 0px 49%;">
                        <button type="submit" class="btn btn-thanh-toan">Thanh toán</button>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</form>
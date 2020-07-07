    <div class="colorlib-product">
        <div class="container" style="margin-top: 150px;">
        <h2>Thông tin đơn hàng</h2>
            <?php
            // session_start();
            if(isset($_SESSION["donhang"])){
                $donhang = $_SESSION["donhang"];
                $madh = $donhang["madh"];
                $makh = $donhang["makh"];
            
            if (isset($_SESSION["cart"])) {
                $sum = 0;
                $count = count($_SESSION["cart"]);
                foreach ($_SESSION["cart"] as $item) {
                    $sum += $item["thanhtien"];
                }

                $sql = "SELECT * FROM hinhthucthanhtoan";
                $rs = mysqli_query($conn, $sql);

            ?>

                <div class="order-inf">
                    <div>
                        <h5>Thông tin đơn hàng</h5>
                        <table>
                            <tr>
                                <td>Tổng số sản phẩm:</td>
                                <td><?php echo $count; ?></td>
                            </tr>
                            <tr>
                                <td>Tổng tiền</td>
                                <td style="color: red; font-size: 24px; font-weight: 600;"><?php echo $sum; ?></td>
                            </tr>
                        </table>
                    </div>
                    <form action="" method="POST">
                        <select name="pttt" id="pttt" class="selected-pt-thanh-toan">
                            <?php while ($row = mysqli_fetch_array($rs)) { ?>
                                <option class="option-thanh-toan" value="<?php echo $row['mathanhtoan']; ?>"><?php echo $row['tenphuongthuc']; ?></option>
                            <?php } ?>
                        </select>
                    </form>
                </div>

            <?php }} ?>
        </div>
    </div>
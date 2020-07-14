<div class="colorlib-product">
    <div class="container" style="margin-top: 150px;">
        <?php
        $id = $_SESSION["userid"];
        $sql = "SELECT * FROM donhang WHERE makh = '$id' AND trangthaidh = 1";
        $rs = mysqli_query($conn, $sql);
        ?>
        <h3 style="text-align: center;">Lịch sử mua hàng</h3>
        <table class="tb-v-dh">
            <tr>
                <th>Mã đơn hàng</th>
                <th></th>
                <th>Thành tiền</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($rs)) {
                $madh = $row['madonhang']; ?>
                <tr>
                    <td><?php echo $madh; ?></td>
                    <td>
                        <?php

                        $qr = "SELECT * FROM chitietdonhang as ct
                            INNER JOIN sanpham as sp
                            ON ct.masp = sp.masp
                            WHERE  madh = '$madh'";
                        $res = mysqli_query($conn, $qr);
                        ?>
                        <table>
                            <?php while ($ct = mysqli_fetch_array($res)) { ?>
                                <tr style="border: none; width: 100%;">
                                    <td style="width: 85%;"><?php echo $ct['tensp']; ?></td>
                                    <td style="width: 15%;">
                                        <?php if (substr($ct['anh'], 0, 4) == "http") { ?>
                                            <img src="<?php echo $ct['anh']; ?>" class="img-fluid" alt="" width="50px">
                                        <?php } else { ?>
                                            <img src="../upoad/<?php echo $ct['anh']; ?>" class="img-fluid" alt="" width="50px">
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </td>
                    <td><?php echo number_format($row['tongtien']); ?>VND</td>
                </tr>
            <?php } ?>

        </table>
    </div>
</div>
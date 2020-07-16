<?php
try {
    if (isset($_REQUEST['id'])) {
        $madh = $_REQUEST['id'];
        $sql = "SELECT * FROM donhang, khachhang WHERE donhang.makh = khachhang.makh AND madonhang = $madh";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            $dh = mysqli_fetch_array($rs);
?>
            <h4 style="text-transform: uppercase; text-align: center; margin-top: -10px;">Hóa đơn</h4>
            <div class="view-don-hang">
                <input type="text" value="<?php echo $dh['madonhang']; ?>" name="madh" hidden>
                <table class="tb-dh" style="text-align: left;">
                    <tr>
                        <th>Mã đơn hàng: </th>
                        <th style="width: 400px;"><?php echo $dh['madonhang']; ?></th>
                        <th>Ngày đặt hàng: </th>
                        <td><?php echo date_format(date_create($dh['ngaydat']), "d/m/yy"); ?></td>
                    </tr>
                    <tr>
                        <th>Họ tên khách hàng: </th>
                        <td colspan="3" style="text-transform: uppercase;"><?php echo $dh['tenkh']; ?></td>
                    </tr>
                    <tr>
                        <th>Ngày giao dự kiến: </th>
                        <td><?php echo date_format(date_create($dh['ngaygiao']), "d/m/yy"); ?></td>
                    </tr>
                    <tr>
                        <th>Tổng tiền: </th>
                        <td><?php echo number_format($dh['tongtien']); ?>VND</td>
                    </tr>
                    <tr>
                        <th colspan="2">Danh sách sản phẩm: </th>
                    </tr>
                    <tr>
                        <table class="tb-ct-dh">
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                            <?php
                            $qr = "SELECT ct.masp, ct.soluong, ct.thanhtien, sp.tensp 
                                FROM chitietdonhang as ct
                                JOIN sanpham as sp 
                                ON ct.masp = sp.masp
                                WHERE madh = $madh;";
                            $cts = mysqli_query($conn, $qr);
                            while ($ct = mysqli_fetch_array($cts)) {
                            ?>
                                <tr>
                                    <td style="width: 200px;"><?php echo $ct['masp']; ?></td>
                                    <td style="width: 400px;"><?php echo $ct['tensp']; ?></td>
                                    <td style="text-align: center;"><?php echo $ct['soluong']; ?></td>
                                    <td style="width: 150px;"><?php echo number_format($ct['thanhtien']); ?>VND</td>
                                </tr>
                            <?php } ?>
                        </table>
                    </tr>
                    <tr style="margin: 20px 0px;">
                        <th><b>Ngày xuất hóa đơn:</b></th>
                        <td colspan="3">
                            <?php echo date("d/m/yy"); ?>
                        </td>
                    </tr>
                </table>
                <div style="margin-top: 20px; text-align: center;">
                    <a href="/luli/admin/views/xu-ly-don-hang.php?id=<?php echo $dh['madonhang']; ?>" class="btn-btnlink">Quay lại</a>
                    <a href="/luli/admin/views/in-hoa-don.php?id=<?php echo $dh['madonhang']; ?>" class="btn-btnlink">In hóa đơn</a>
                </div>
            </div>

<?php
        } else {
            echo "khong co du lieu";
        }
    } else {
        echo "khong co du lieu";
    }
} catch (Exception $e) {
    echo $e;
}
?>
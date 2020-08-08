<?php
try {
    if (isset($_REQUEST['id'])) {
        $madh = $_REQUEST['id'];
        $sql = "SELECT * FROM donhang, khachhang WHERE donhang.makh = khachhang.makh AND madonhang = '$madh'";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            $dh = mysqli_fetch_array($rs);
?>
            <h4 style="text-transform: uppercase; text-align: center; margin-top: -10px;">Đơn hàng</h4>
            <div class="view-don-hang">
                <form action="/luli/admin/views/handlers/hd_xu-ly-don-hang.php" method="POST" >
                    <input type="text" value="<?php echo $dh['madonhang']; ?>" name="madh" hidden>
                    <table class="tb-dh" style="text-align: left;" >
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
                                $qr = "SELECT * FROM chitietdonhang, sanpham WHERE chitietdonhang.masp = sanpham.masp AND madh = '$madh'";
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
                        <tr>
                            <th><b>Xử lý đơn hàng:</b></th>
                            <td colspan="3">
                                <select name="tinhtrang" id="tinhtrang">
                                    <?php $sl_tt = "SELECT * FROM tinhtrangdonhang";
                                    $tts = mysqli_query($conn, $sl_tt);
                                    while ($tt = mysqli_fetch_array($tts)) {
                                    ?>
                                        <option value="<?php echo $tt['matinhtrang']; ?>"><?php echo $tt['tentinhtrang']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div>
                        <a href="/luli/admin/views/don-hang.php" class="btn-btnlink">Quay lại</a>
                        <a href="/luli/admin/views/in-hoa-don.php?id=<?php echo $dh['madonhang']; ?>" class="btn-btnlink">In hóa đơn</a>
                        <button type="submit" class="btn-btnlink">Xử lý đơn hàng</button>
                        <a href="/luli/admin/views/handlers/deleted_item.php?id=<?php echo $dh['madonhang']; ?>&tb=dh" class="btn-btnlink">Hủy bỏ đơn hàng</a>
                    </div>
                </form>
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

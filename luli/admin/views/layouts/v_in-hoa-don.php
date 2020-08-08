<?php
try {
    if (isset($_REQUEST['id'])) {
        $madh = $_REQUEST['id'];
        $sql = "SELECT * FROM donhang, khachhang WHERE donhang.makh = khachhang.makh AND madonhang = '$madh'";
        $rs = mysqli_query($conn, $sql);
        if ($rs) {
            $dh = mysqli_fetch_array($rs);
?>
            
            <div class="view-don-hang" id="content">
                <input type="text" value="<?php echo $dh['madonhang']; ?>" name="madh" hidden>
                <table class="tb-dh" style="text-align: left;" id="tblCustomers">
                    <tr>
                        <td colspan="4">
                            <h4 style="text-transform: uppercase; text-align: center; ">Hóa đơn</h4>
                        </td>
                    </tr>
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
                    </tr>
                    <tr style="margin: 20px 0px;">
                        <th><b>Ngày xuất hóa đơn:</b></th>
                        <td colspan="3">
                            <?php echo date("d/m/yy"); ?>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" style="text-align: right; padding-right: 100px; border-top: .5px solid #DDD;">Nhân viên</th>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right; padding-right: 85px;"><?php echo $_SESSION["admin"]; ?></td>
                    </tr>
                    
                </table>
                <div style="margin-top: 20px; text-align: center;">
                    <a href="/luli/admin/views/xu-ly-don-hang.php?id=<?php echo $dh['madonhang']; ?>" class="btn-btnlink">Quay lại</a>
                    <button onclick="Export();" style="border: none; background: none;">In hóa đơn</button>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script type="text/javascript">
    function Export() {
        html2canvas(document.getElementById('tblCustomers'), {
            onrendered: function (canvas) {
                var data = canvas.toDataURL();
                var docDefinition = {
                    content: [{
                        image: data,
                        width: 500
                    }]
                };
                pdfMake.createPdf(docDefinition).download("in-hoa-don.pdf");
            }
        });
    }
</script>
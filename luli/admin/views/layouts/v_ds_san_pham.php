<?php

$sql = 'SELECT * FROM sanpham WHERE trangthai = 1';

$rs = mysqli_query($conn, $sql);

if ($rs != null) {

?>
    <div class="body">
        <div class="table-responsive">
            <a href="" style="float: right;">Thêm sản phẩm</a>
            <h2 style="padding: 10px 20px; text-align: center; text-transform: uppercase; font-weight: 600;">Danh sách sản phẩm</h2>
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($rs)) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $row['masp']; ?></td>
                            <td><?php echo $row['tensp']; ?></td>
                            <td style="width: 80px;"><img src="<?php echo $row['anh']; ?>" alt="" style="width: 80px;"></td>
                            <td style="text-align: center;"><?php echo $row['soluong']; ?></td>
                            <td style="text-align: center;"><?php echo number_format($row['gia']) . "VND"; ?></td>
                            <td style="text-align: center;"><?php echo $row['trangthai']; ?></td>
                            <td><a href="">Cập nhật</a> | <a href="./handlers/deleted_item.php?id=<?php echo $row['masp']; ?>&tb=sp">Xóa</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } else { ?>
    <p style="text-align: center;"><span style=" font-size: 20px; padding: 10px 200px; color: red; background: sandybrown;">Không có data</span></p>
<?php } ?>
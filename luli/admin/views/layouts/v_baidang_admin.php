<?php

$sql = 'SELECT * FROM baidang, sanpham WHERE baidang.masp = sanpham.masp';

$rs = mysqli_query($conn, $sql);

if ($rs != null) {

?>
    <div class="body">
        <div class="table-responsive">
            <a href="./them-bai-dang.php" style="float: right;">Thêm bài đăng</a>
            <h2 style="padding: 10px 20px; text-align: center; text-transform: uppercase; font-weight: 600;">Danh sách bài đăng</h2>
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>Mã bài đăng</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã bài đăng</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Nội dung</th>
                        <th>Ngày đăng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($rs)) { ?>
                        <tr>
                            <td style="font-weight: 600; text-align: center; padding-top: 40px; width: 120px;"><?php echo $row['mabaidang']; ?></td>
                            <td style="width: 200px;"><?php echo $row['tensp']; ?></td>
                            <td style="width: 80px;">
                                <?php if (substr($row['anh'], 0, 4) == "http") { ?>
                                    <img src="<?php echo $row['anh']; ?>" alt="" style="width: 80px;">
                                <?php } else { ?>
                                    <img src="../../upload/<?php echo $row['anh']; ?>" alt="" style="width: 80px;">
                                <?php } ?>
                            </td>
                            <td><?php echo $row['noidung']; ?></td>
                            <td style="width: 100px;"><?php echo $row['ngaydang']; ?></td>
                            <td><?php echo $row['trangthai_db']; ?></td>
                            <td style="width: 150px;"><a href="./cap-nhat-bai-dang.php?id=<?php echo $row['mabaidang']; ?>">Cập nhật</a> | <a href="./handlers/deleted_item.php?id=<?php echo $row['mabaidang']; ?>&tb=bd">Xóa</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } else { ?>
    <p style="text-align: center;"><span style=" font-size: 20px; padding: 10px 200px; color: red; background: sandybrown;">Không có data</span></p>
<?php } ?>
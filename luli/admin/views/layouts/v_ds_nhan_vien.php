<?php

$sql = 'SELECT * FROM nhanvien, quyen WHERE nhanvien.quyen = quyen.maquyen';

$rs = mysqli_query($conn, $sql);

if ($rs != null) {

?>
    <div class="body">
        <div class="table-responsive">
            <a href="./them-nhan-vien.php" style="float: right;">Thêm nhân viên</a>
            <h2 style="padding: 10px 20px; text-align: center; text-transform: uppercase; font-weight: 600;">Danh sách nhân viên</h2>
            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                <thead>
                    <tr>
                        <th>Mã nhân viên</th>
                        <th>Tên nhân viên</th>
                        <th>Hình ảnh</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Quyền</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Mã nhân viên</th>
                        <th>Tên nhân viên</th>
                        <th>Hình ảnh</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Quyền</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($rs)) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $row['manv']; ?></td>
                            <td><?php echo $row['tennv']; ?></td>
                            <?php if (substr($row['hinhanh'], 0, 4) == "http") { ?>
                                <td style="width: 80px;"><img src="<?php echo $row['hinhanh']; ?>" alt="" style="width: 80px;"></td>
                            <?php } else { ?>
                                <td style="width: 80px;"><img src="../../upload/<?php echo $row['hinhanh']; ?>" alt="" style="width: 80px;"></td>
                            <?php } ?>
                            <td><?php echo $row['email']; ?></td>
                            <!-- <td><?php echo $row['ngaysinh']; ?></td> -->
                            <td><?php echo $row['sodienthoai']; ?></td>
                            <td><?php echo $row['diachi']; ?></td>
                            <td><?php echo $row['tenquyen']; ?></td>
                            <td><?php echo $row['trangthai']; ?></td>
                            <td><a href="./cap-nhat-nhan-vien.php?id=<?php echo $row['manv']; ?>">Cập nhật</a> | <a href="./handlers/deleted_item.php?id=<?php echo $row['manv']; ?>&tb=nv">Xóa</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php } else { ?>
    <p style="text-align: center;"><span style=" font-size: 20px; padding: 10px 200px; color: red; background: sandybrown;">Không có data</span></p>
<?php } ?>
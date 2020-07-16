<?php
$sql = "SELECT * FROM donhang, khachhang WHERE donhang.makh = khachhang.makh AND trangthaidh = 1 AND tinhtrangdonhang != 3 AND tinhtrangdonhang != 2";
$rs = mysqli_query($conn, $sql);
?>

<div>
    <?php if ($rs) { ?>
        <h4 style="text-align: center; text-transform: uppercase; margin-top: -10px">Danh sách đơn hàng</h4>
        <table class="tb-v-dh">
            <tr>
                <th>Mã đơn hàng</th>
                <th>Khách hàng</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Trạng thái đơn hàng</th>
                <th></th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($rs)) { ?>
                <tr>
                    <td><?php echo $row['madonhang']; ?></td>
                    <td><?php echo $row['tenkh']; ?></td>
                    <td><?php $date = date_create($row['ngaydat']);
                        echo date_format($date, "d-m-yy"); ?></td>
                    <td><?php echo number_format($row['tongtien']); ?></td>
                    <td>
                        <?php if ($row['trangthaidh'] && $row['tinhtrangdonhang'] == 2) {
                            echo "Đã giao";
                        } else {
                            if ($row['trangthaidh'] == 0 && $row['tinhtrangdonhang'] == 3) {
                                echo "Đã hủy";
                            } else {
                                echo "Đang xử lý";
                            }
                        } ?>
                    </td>
                    <td>
                        <a href="/luli/admin/views/xu-ly-don-hang.php?id=<?php echo $row['madonhang']; ?>">Xử lý</a> |
                        <a href="/luli/admin/views/handlers/deleted_item.php?id=<?php echo $row['madonhang']; ?>&tb=dh">Hủy</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <h4 style="background: tomato; color: #fff; padding: 10px 40px; text-align: center;">Không có đơn hàng nào đang chờ xử lý</h4>
    <?php } ?>
</div>
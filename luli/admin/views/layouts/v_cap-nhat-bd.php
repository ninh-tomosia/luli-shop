<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Cập nhật bài đăng
                </h2>
            </div>
            <?php $id = $_REQUEST['id'];
            $qr = "SELECT * FROM baidang WHERE mabaidang = '$id'";
            $rsl = mysqli_query($conn, $qr);
            $r = mysqli_fetch_array($rsl);
            ?>
            <form action="./handlers/hd_update-bai-dang.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="mabd" value="<?php echo $id; ?>" hidden>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label for="masp">Tên sản phẩm:</label>
                                <select name="masp" id="masp" style="width: 500px; padding: 5px 10px;">
                                    <?php
                                    $sql = "SELECT * FROM sanpham WHERE trangthai = 1";
                                    $rs = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($rs)) {
                                    ?>
                                        <option style="line-height: 20px;" value="<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="mota" value="<?php echo $r['noidung']; ?>" class="form-control" placeholder="Mô tả">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="trangthai">Trạng thái:</label>
                        <select name="trangthai" id="trangthai" style="width: 150px; padding: 5px 10px;">
                            <option style="line-height: 20px;" value="1">Kích hoạt</option>
                            <option style="line-height: 20px;" value="0">Khóa</option>
                        </select>
                    </div>
                    <div class="row">
                        <a href="/luli/admin/views/danh-sach-bai-dang.php" style="margin-right: 20px; float: right;">Quay lại</a>
                        <button type="submit" style="float: right; margin-right: 20px;">
                            Cập nhật bài đăng
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
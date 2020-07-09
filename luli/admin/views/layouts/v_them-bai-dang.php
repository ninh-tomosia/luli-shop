<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Thêm bài đăng
                </h2>
            </div>
            <form action="./handlers/hd_them-bai-dang.php" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="mota" class="form-control" placeholder="Mô tả">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a href="/luli/admin/views/danh-sach-bai-dang.php" style="margin-left: 20px;">Quay lại</a>
                        <button type="submit" style="float: right; margin-right: 20px;">
                            Thêm bài đăng
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
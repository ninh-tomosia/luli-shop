<div style="width: 500px; margin: 10px auto;">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Thêm sản phẩm
                    </h2>
                </div>
                <form action="./handlers/handle_them-san-pham.php" method="POST" enctype="multipart/form-data">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="tensp" class="form-control" placeholder="Tên sản phẩm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="gia" class="form-control" placeholder="Giá">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="soluong" class="form-control" placeholder="Số lượng">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    Hình ảnh: <input type="file" name="photo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <label for="loaisp">Loại sản phẩm:</label>
                                    <select name="loaisp" id="loaisp" style="width: 200px; padding: 5px 10px;">
                                        <?php
                                        $sql = "SELECT * FROM loaisanpham";
                                        $rs = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($rs)) {
                                        ?>
                                            <option style="line-height: 20px;" value="<?php echo $row['maloai']; ?>"><?php echo $row['tenloai']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="browser">Nhà cung cấp:</label>
                                    <select name="nhacc" id="nhacc" style="width: 200px; padding: 5px 10px;">
                                        <?php
                                        $sql = "SELECT * FROM nhacungcap";
                                        $rs = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($rs)) {
                                        ?>
                                            <option style="line-height: 20px;" value="<?php echo $row['manhacungcap']; ?>"><?php echo $row['tennhacungcap']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="/luli/admin/views/danh-sach-san-pham.php" style="margin-left: 20px;">Quay lại</a>
                            <button type="submit" style="float: right; margin-right: 20px;">
                                Thêm sản phẩm
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
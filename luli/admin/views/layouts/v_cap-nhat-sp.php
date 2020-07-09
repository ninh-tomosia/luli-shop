<div style="width: 500px; margin: 10px auto;">
    <?php
    $masp = $_REQUEST['id'];
    $sql = "SELECT * FROM sanpham WHERE masp = '$masp'";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
    ?>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Cập nhật sản phẩm
                    </h2>
                </div>
                <form action="./handlers/handle_cap-nhat-san-pham.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="masp" value="<?php echo $masp; ?>" hidden>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="tensp" class="form-control" value="<?php echo $row['tensp']; ?>" placeholder="Tên sản phẩm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="gia" value="<?php echo $row['gia']; ?>" class="form-control" placeholder="Giá">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="soluong" value="<?php echo $row['soluong']; ?>" class="form-control" placeholder="Số lượng">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="sohc" value="<?php echo $row['sohiencon']; ?>" class="form-control" placeholder="Số hiện còn">
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
                                <div class="col-md-4">
                                    <label for="loaisp">Loại sản phẩm:</label>
                                    <select name="loaisp" id="loaisp" value="<?php echo $row['loaisanpham']; ?>" style="width: 150px; padding: 5px 10px;">
                                        <?php
                                        $sql = "SELECT * FROM loaisanpham";
                                        $rs = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($rs)) {
                                        ?>
                                            <option style="line-height: 20px;" value="<?php echo $row['maloai']; ?>"><?php echo $row['tenloai']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="nhacc">Nhà cung cấp:</label>
                                    <select name="nhacc" id="nhacc" value="<?php echo $row['nhacungcap']; ?>" style="width: 150px; padding: 5px 10px;">
                                        <?php
                                        $sql = "SELECT * FROM nhacungcap";
                                        $rs = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($rs)) {
                                        ?>
                                            <option style="line-height: 20px;" value="<?php echo $row['manhacungcap']; ?>"><?php echo $row['tennhacungcap']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="trangthai">Trạng thái:</label>
                                    <select name="trangthai" id="trangthai" style="width: 150px; padding: 5px 10px;">
                                        <option style="line-height: 20px;" value="1">Kích hoạt</option>
                                        <option style="line-height: 20px;" value="0">Khóa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <a href="/luli/admin/views/danh-sach-san-pham.php" style="margin-left: 20px;">Quay lại</a>
                            <button type="submit" style="float: right; margin-right: 20px;">
                                Cập nhật
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
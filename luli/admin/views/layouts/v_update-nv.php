<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM nhanvien WHERE manv = $id";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);
?>

<div class="login-form form-regist">
    <form action="./handlers/hd_update-nv.php" method="POST" enctype="multipart/form-data">
        <input type="text" value="<?php echo $row['manv']; ?>" name="txtmanv" style="display: none;">
        <div class="d-flex col">
            <div class="logo-user col-lg-2" style="padding: 10px 0;">
                <?php if ($row['hinhanh'] != null) {
                    if (substr($row['hinhanh'], 0, 4) == "http") { ?>
                        <img src="<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tennv']; ?>" id="img-user" />
                    <?php } else { ?>
                        <img src="../../upload/<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tennv']; ?>" id="img-user" />
                    <?php } ?>
                <?php } else { ?>
                    <img src="../../assets/admin/images/no-user.png" alt="<?php echo $row['tennv']; ?>" id="img-user" />
                <?php } ?>
            </div>
            <div class="col-lg-10">
                <h1 class="name-user" id="name-user"><?php echo $row['tennv']; ?></h1>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" value="<?php echo $row['tennv']; ?>" name="txtname" class="text-input" placeholder="Họ và tên..." id="inpName">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" value="<?php echo $row['email']; ?>" name="txtemail" class="text-input" placeholder="Email..." id="inpName">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" value="<?php echo $row['sodienthoai']; ?>" name="txtsdt" class="text-input" placeholder="Số điện thoại...">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" value="<?php echo $row['diachi']; ?>" name="txtaddr" class="text-input" placeholder="Địa chỉ...">
            </div>
        </div>
        <!-- <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" value="" name="txtc" class="text-input" placeholder="Chứng minh thư...">
                    </div>
                </div> -->
        <div class="form-group">
            <div class="col-md-12">
                <input type="file" name="photo" id="inpImg" class="text-input" onchange="upload.submit();" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6">
                <label for="trangthai">Quyền:</label>
                <select name="quyen" id="quyen" style="width: 150px; padding: 5px 10px;">
                    <?php $sql = "SELECT * FROM quyen ";
                    $rs = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                        <option value="<?php echo $row['maquyen']; ?>"><?php echo $row['tenquyen']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="trangthai">Trạng thái:</label>
                <select name="trangthai" id="trangthai" style="width: 150px; padding: 5px 10px;">
                    <option style="line-height: 20px;" value="1">Kích hoạt</option>
                    <option style="line-height: 20px;" value="0">Khóa</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div style="padding: 10px 0px;">
                    <div class="col-md-3"><a href="/luli/admin/views/danh-sach-nhan-vien.php" style="margin-left: 20px; margin-top: 20px">Quay lại</a></div>
                    <div class="button col-md-9"><button type="submit" style="float: right;" class="btn-regist">Cập nhật</button> </div>
                </div>
            </div>
        </div>
    </form>
</div>
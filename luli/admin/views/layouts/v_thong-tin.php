<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM nhanvien WHERE manv = $id";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);
?>

<div class="login-form form-regist">
    <form action="./handlers/handle_update_thong-tin_admin.php" method="POST" enctype="multipart/form-data">
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
            <div class="col-md-12">
                <div class="button"><button type="submit" class="btn-regist">Cập nhật</button> </div>
            </div>
        </div>
    </form>
</div>
<?php
if ($_SESSION["userid"] == null) {
    header("location: /luli/views/login.php");
} else {
    $id = $_SESSION['userid'];
    $sql = "SELECT * FROM khachhang WHERE makh = $id";
    $rs = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($rs);
?>
    <div class="colorlib-product">
        <div class="container">
            <div class="login-form form-regist">
                <form action="./handlers/handle_update_thong-tin.php" method="POST">
                    <input type="text" value="<?php echo $row['makh']; ?>" name="txtmakh" style="display: none;">
                    <div class="d-flex col">
                        <!-- <div class="logo-user">
                        <img src="@Model.hinhanh.Substring(1, Model.hinhanh.Length - 1)" alt="@Model.hoten" id="img-user" />
                    </div> -->
                        <div class="col-lg-8">
                            <h1 class="name-user" id="name-user"><?php echo $row['tenkh']; ?></h1>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" value="<?php echo $row['tenkh']; ?>" name="txtname" class="text-input" placeholder="Họ và tên..." id="inpName">
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
                        <input type="text" value="" name="txtcmnd" class="text-input" placeholder="Chứng minh thư...">
                    </div>
                </div> -->
                    <!-- <div class="form-group">
                    <div class="col-md-12">
                        <input type="file" name="inpImg" id="inpImg" class="text-input" onchange="upload.submit();" />
                    </div>
                </div> -->

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="button"><button type="submit" class="btn-regist">Cập nhật</button> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
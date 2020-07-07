<?php
if (isset($_SESSION["adminid"]) == true) {
?>
    <div class="user-info">
        <?php if ($_SESSION["hinhanh_admin"] != null) {

            if (substr($_SESSION["hinhanh_admin"], 0, 4) == "http") { ?>
                <div class="image">
                    <img src="<?php echo $_SESSION["hinhanh_admin"]; ?>" width="48" height="48" alt="User" />
                </div>
            <?php } else { ?>
                <div class="image">
                    <img src="../../upload/<?php echo $_SESSION["hinhanh_admin"]; ?>" width="48" height="48" alt="User" />
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="image">
                <img src="../../assets/admin/images/no-user.png" width="48" height="48" alt="User" />
            </div>
        <?php } ?>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["admin"]; ?></div>
            <div class="email"><?php echo $_SESSION["admin_email"]; ?></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right drop-custom">
                    <li><a href="../views/thong-tin.php?id=<?php echo  $_SESSION["adminid"]; ?>"><i class="material-icons">person</i>Thông tin cá nhân</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Theo dõi</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Khuyến mãi</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Thích</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="../views/handlers/handle_logout_admin.php?id=<?php echo $_SESSION["adminid"]; ?>"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>

<?php } else { ?>
    <div class="user-info">
        <div class="image">
            <img src="../../assets/admin/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="email">
                <a style="color: white;" href="/luli/admin/">Đăng nhập</a>
            </div>
        </div>
    </div>
<?php } ?>
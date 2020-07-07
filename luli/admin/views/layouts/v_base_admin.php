<div class="form-user-control">
    <?php if ($_SESSION["hinhanh_admin"] != null) {
        if (substr($_SESSION['hinhanh_admin'], 0, 4) == "http") { ?>
            <div class="img-user" style="background-image: url(<?php echo $_SESSION["hinhanh_admin"]; ?>);"></div>
        <?php } else{?>
        <div class="img-user" style="background-image: url(../../upload/<?php echo $_SESSION["hinhanh_admin"]; ?>);"></div>
    <?php } }else { ?>
        <div class="img-user" style="background-image: url(../../assets/admin/images/no-user.png);"></div>
    <?php } ?>
    <div class="name-user">
        <h2>
            <a href="/luli/admin/views/thong-tin.php?id=<?php echo $_SESSION["adminid"]; ?>">
                <?php echo $_SESSION["admin"]; ?>
            </a>
            <small style="margin-top: 20px;">Follow me</small>
        </h2>
    </div>
    <div class="form-control-user">
        <div class="flow-item">
            <h5><a href="https://facebook.com/ngok.iu.9480/" target="_blank">facebook</a></h5>
        </div>
        <div class="flow-item">
            <h5><a href="https://instagram.com/hoanhi_0911/" target="_blank">instagam</a></h5>
        </div>
    </div>
</div>
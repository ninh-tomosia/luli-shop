<?php include './shared/header.php' ?>
<?php session_start();
if (isset($_SESSION["adminid"]) == true) {
    header("location: /luli/admin/views/");
} else {
?>
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>LULI</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="./views/handlers/handle_login_admin.php">
                    <div class="msg">Đăng nhập</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Tài khoản" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Ghi nhớ phiên đăng nhập</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.php">Quên mật khẩu?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<?php include './shared/footer.php' ?>
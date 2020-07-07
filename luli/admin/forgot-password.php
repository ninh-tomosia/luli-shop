<?php include './shared/header.php' ?>
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Admin<b>LULI</b></a>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="./views/handlers/handle_forgot-password_admin.php">
                <div class="msg">Forgot password</div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="cf_password" placeholder="Cofirm Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-6">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">FORGOT PASSWORD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include './shared/footer.php' ?>
<?php include './shared/header.php'; ?>
<div id="page">
    <div class="main-content">
        <div class="container">
            <div class="colorlib-product">
                <div class="container">
                    <div class="login-form">
                        <h2>Đăng nhập</h2>
                        <form action="./handlers/handle_login.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="text-input" placeholder="Tên đăng nhập..." require>
                                <input type="password" name="password" id="password" class="text-input" placeholder="Mật khẩu" require>
                                <div class="row-btn">
                                    <div class="button"><button type="submit" class="btn-login">Đăng nhập</button> </div>
                                    <div class="button"><a href="sign-up.php"><span class="btn-signup">Đăng ký</span></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './shared/footer.php'; ?>
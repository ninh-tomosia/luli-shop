<?php include './shared/header.php'; ?>
<div id="page">
    <div class="main-content">
        <div class="container">
            <div class="colorlib-product">
                <div class="container">
                    <div class="login-form form-regist">
                        <h2>Đăng ký</h2>
                        <form action="./handlers/handle_signup.php" method="post">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="fullname" id="fullname" class="text-input" placeholder="Họ và tên..." require>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="col-md-12 d-flex text-center">
                                    <div class="col-lg-3">
                                        <input type="radio" name="gioitinh" value="nam" class="custom-radio">
                                        <span> Nam</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="gioitinh" value="nu" class="custom-radio">
                                        <span> Nữ</span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="username" id="username" class="text-input" placeholder="Tài khoản..." require>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="email" id="email" class="text-input" placeholder="Thư điện tử..." require>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="phone" id="phone" class="text-input" placeholder="Số điện thoại..." require>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label id="lb_pass" for="password" style="position: absolute; z-index: 100; color: red;"></label>
                                    <input type="password" name="password" id="password" class="text-input" placeholder="Mật khẩu..." require>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="col-md-12">
                                <label id="lb_cf_pass" for="cf_password" style="position: absolute; z-index: 100; color: red;"></label>
                                    <input type="text" name="cf_password" id="cf_password" class="text-input" placeholder="Nhập lại mật khẩu..." require>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="address" id="address" class="text-input" placeholder="Địa chỉ..." require>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="button"><button type="submit" class="btn-regist">Đăng ký</button> </div>
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
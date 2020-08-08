<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="/luli">LULI</a></div>
                </div>
                <div class="col-sm-5 col-md-3">
                    <form action="/luli/views/tim-kiem.php" class="search-wrap" method="GET">
                        <div class="form-group">
                            <input type="search" class="form-control search" name="search" placeholder="Tìm kiếm...">
                            <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul id="main-menu">
                        <li><a id="home" class="menu-item" href="/luli">trang chủ</a></li>
                        <li><a id="nam" class="menu-item" href="/luli/views/nam.php">nam</a></li>
                        <li><a id="nu" class="menu-item" href="/luli/views/nu.php">nữ</a></li>
                        <li><a id="tre_em" class="menu-item" href="/luli/views/tre-em.php">trẻ em</a></li>
                        <li><a id="double" class="menu-item" href="/luli/views/cap-doi.php">cặp đôi</a></li>
                        <?php if (isset($_SESSION["cart_shoes"])) {
                            $count = count($_SESSION["cart_shoes"]);
                        ?>
                            <li class="cart"><a id="gio_hang" class="menu-item" href="./views/gio-hang.php"><i class="icon-shopping-cart"></i> giỏ hàng [<?php echo $count; ?>]</a></li>
                        <?php } else { ?>
                            <li class="cart"><a id="gio_hang" class="menu-item" href="./views/gio-hang.php"><i class="icon-shopping-cart"></i> giỏ hàng [0]</a></li>
                        <?php } ?>
                        <?php
                        if (isset($_SESSION["userid"]) == false) { ?>
                            <li class="cart"><a id="login" class="menu-item" href="./views/login.php"><i class="icon-user2"></i> Đăng nhập</a></li>
                        <?php } else { ?>
                            <li class="cart has-dropdown">
                                <a id="login" class="menu-item" href="./views/thong-tin.php" style="color: red;">
                                    <i class="icon-user2"></i> <?php echo $_SESSION["user"]; ?>
                                </a>
                                <ul class="dropdown custom-dropdown">
                                    <li><a href="./views/thong-tin.php">Xem thông tin </a></li>
                                    <li><a href="./views/thong-tin-don-hang.php">Thông tin đơn hàng </a></li>
                                    <li><a href="./views/lich-su-mua-hang.php">Lịch sử mua hàng </a></li>
                                    <li><a href="./views/handlers/handle_logout.php">Đăng xuất</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
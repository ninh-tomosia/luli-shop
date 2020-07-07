<?php
// include '../../db_connect.php';
    // include 'v_banner.php';

    $sql = "SELECT * FROM baidang, sanpham, loaisanpham WHERE baidang.masp = sanpham.masp and sanpham.loaisanpham = loaisanpham.maloai and loaisanpham.madmsp = 1 and baidang.trangthai = 1";

    $rs = mysqli_query($conn, $sql);
?>
<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Nam</h2>
                <hr>
            </div>
        </div>
        <div class="row row-pb-md">
            <?php while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) { ?>
                <div class="col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="/luli/views/chi-tiet-san-pham.php?id=<?php echo $row['masp'];?>" class="prod-img">
                            <img src="<?php echo $row['anh']; ?>" class="img-fluid" alt="Alternate Text" />
                        </a>
                        <div class="desc">
                            <h2 class="row-2"><a href="/luli/views/chi-tiet-san-pham.php?id=<?php echo $row['masp'];?>"><?php echo $row['tensp']; ?></a></h2>
                            <span class="price" style="font-size: 20px"><?php echo number_format($row['gia']) . 'VND'; ?></span>
                            <a href="" class="btn btn-outline-danger"><i class="icon-plus-outline"></i> Mua hàng</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
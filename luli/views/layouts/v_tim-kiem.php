<div>
    <div class="colorlib-product">
        <div class="container">
            <div style="margin-top: 150px;">
                <div class="row row-pb-md">
                    <?php
                    if (isset($_GET['search'])) {
                        $param = $_GET['search'];
                        $sql = "SELECT * FROM sanpham AS sp
                    INNER JOIN loaisanpham AS lsp
                    ON sp.loaisanpham = lsp.maloai
                    WHERE (sp.tensp LIKE '%$param%' OR lsp.tenloai LIKE '%$param%')
                    AND sp.trangthai = 1";
                        // $sql = "SELECT * FROM sanpham WHERE sanpham.tensp LIKE '%$param%'";
                        $rs = mysqli_query($conn, $sql);
                    ?>
                        <?php while ($row = mysqli_fetch_array($rs, MYSQLI_BOTH)) { ?>
                            <div class="col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="" class="prod-img">
                                        <?php if (substr($row['anh'], 0, 4) == "http") { ?>
                                            <img src="<?php echo $row['anh']; ?>" class="img-fluid" alt="">
                                        <?php } else { ?>
                                            <img src="../upload/<?php echo $row['anh']; ?>" class="img-fluid" alt="">
                                        <?php } ?>
                                    </a>
                                    <div class="desc">
                                        <h2 class="row-2"><a href="/luli/views/chi-tiet-san-pham.php?id=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a></h2>
                                        <span class="price" style="font-size: 20px"> <?php echo number_format($row['gia']) . 'VND'; ?> </span>
                                        <a href="./views/handlers/handle_gio-hang.php?id=<?php echo $row['masp']; ?>&sl=1" class="btn btn-outline-danger"><i class="icon-plus-outline"></i> Mua hàng</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php
                    } else {
                        header("location: /luli");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
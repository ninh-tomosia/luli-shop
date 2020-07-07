<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM sanpham WHERE sanpham.masp = $id";

$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);

$query = "SELECT * FROM chitietsanpham WHERE masp = $id";
$result = mysqli_query($conn, $query);

?>

<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg product-detail-wrap">
            <div class="col-sm-8">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="<?php echo $row['anh']; ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <?php while($r = mysqli_fetch_array($result)){ ?>
                        <div class="item">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <img src="<?php echo $r['hinhanh']; ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                </a>
                            </div>
                        </div>
                    <?php } mysqli_free_result($result);?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3><?php echo $row['tensp'];?></h3>
                    <p class="price">
                        <span><?php echo number_format($row['gia']) . 'VND'; ?></span>
                    </p>
                    <div class="input-group mb-4">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                <i class="icon-minus2"></i>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                        <span class="input-group-btn ml-1">
                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                <i class="icon-plus2"></i>
                            </button>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p class="addtocart"><a href="cart.html" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$id = $_REQUEST['id'];
$sql = "SELECT * FROM sanpham WHERE sanpham.masp = '$id'";

$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs);

$query = "SELECT * FROM chitietsanpham WHERE masp = '$id'";
$result = mysqli_query($conn, $query);

?>

<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg product-detail-wrap">
            <div class="col-sm-6">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <?php if (substr($row['anh'], 0, 4) == "http") { ?>
                                    <img src="<?php echo $row['anh']; ?>" class="img-fluid" alt="">
                                <?php } else { ?>
                                    <img src="../upload/<?php echo $row['anh']; ?>" class="img-fluid" alt="">
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                    <?php while ($r = mysqli_fetch_array($result)) { ?>
                        <div class="item">
                            <div class="product-entry border">
                                <a href="#" class="prod-img">
                                    <?php if (substr($r['hinhanh'], 0, 4) == "http") { ?>
                                        <img src="<?php echo $r['hinhanh']; ?>" class="img-fluid" alt="">
                                    <?php } else { ?>
                                        <img src="../upload/<?php echo $r['hinhanh']; ?>" class="img-fluid" alt="">
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <form action="" class="col-sm-6">
                <div class="col-lg-12">
                    <div class="product-desc" style="width: 100%;">
                        <h3><?php echo $row['tensp']; ?></h3>
                        <p class="price">
                            <span><?php echo number_format($row['gia']) . 'VND'; ?></span>
                        </p>
                        <div class="size-wrap">
                            <div class="block-26 mb-2">
                                <h4>Size</h4>
                                <ul>
                                    <li><a href="#">28</a></li>
                                    <li><a href="#">29</a></li>
                                    <li><a href="#">30</a></li>
                                    <li><a href="#">31</a></li>
                                    <li><a href="#">32</a></li>
                                    <li><a href="#">33</a></li>
                                    <li><a href="#">34</a></li>
                                    <li><a href="#">35</a></li>
                                    <li><a href="#">36</a></li>
                                    <li><a href="#">37</a></li>
                                    <li><a href="#">38</a></li>
                                    <li><a href="#">39</a></li>
                                    <li><a href="#">40</a></li>
                                    <li><a href="#">41</a></li>
                                    <li><a href="#">42</a></li>
                                </ul>
                            </div>
                            <div class="block-26 mb-4">
                                <h4>Width</h4>
                                <ul>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">W</a></li>
                                </ul>
                            </div>
                        </div>
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
                                <p class="addtocart"><a href="./handlers/handle_gio-hang.php?id=<?php echo $row['masp']; ?>&sl=1" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Thêm vào giỏ hàng</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Mô tả</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Hướng dẫn chọn size</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                    <div class="tab-content">
                                        <h3 style="box-sizing: border-box; font-family: RobotoRegular, arial, sans-serif; line-height: 1.5; color: #373737; margin: 0px; font-size: 24px; padding: 0px;">Cấu tạo, kiểu dáng</h3>
                                        <p style="box-sizing: border-box; font-family: RobotoRegular, arial, sans-serif; margin: 0pt 0px; line-height: 2; color: #555555; font-size: 14px; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricprecision;">Kiểu dáng: Giày thể thao<br style="box-sizing: border-box; font-family: Roboto; margin: 0px; padding: 0px;">Chất liệu: Vải/Cao su</p>
                                        <h3 style="box-sizing: border-box; font-family: RobotoRegular, arial, sans-serif; line-height: 1.5; color: #373737; margin: 0px; font-size: 24px; padding: 0px;">Chất liệu cao cấp</h3>
                                        <p style="box-sizing: border-box; font-family: RobotoRegular, arial, sans-serif; margin: 0pt 0px; line-height: 2; color: #555555; font-size: 14px; padding: 0px; margin-block-start: 0px; margin-block-end: 0px; text-rendering: geometricprecision;"><br style="box-sizing: border-box; font-family: Roboto; margin: 0px; padding: 0px;">- Giày Thể thao NATT - 5256 được làm từ chất liệu cao cấp, rất mềm mại và êm ái, tạo cảm giác thoải mái cho từng bước đi. Phần đế làm bằng cao su tổng hợp với phần rãnh chống trơn trượt, đảm bảo sự an toàn cho người mang.<br style="box-sizing: border-box; font-family: Roboto; margin: 0px; padding: 0px;">Kiểu dáng tinh tế, hợp xu hướng.<br style="box-sizing: border-box; font-family: Roboto; margin: 0px; padding: 0px;">- Giày thể thao&nbsp;NATT - 5256 được thiết kế theo phong cách hiện đại, giày chú trọng phom dáng với từng đừơng may chắn chắn, làm toát lên nét trẻ trung, thanh lịch.&nbsp;<br style="box-sizing: border-box; font-family: Roboto; margin: 0px; padding: 0px;">Sự kết hợp hoàn hảo với những bộ trang phục đủ mọi phong cách.<br style="box-sizing: border-box; font-family: Roboto; margin: 0px; padding: 0px;">- Giày Thể thao&nbsp;NATT - 5256 là một “item” đa năng khi có thể dễ dàng phối với bất kì trang phục nào. Chỉ cần một chút nhấn nhá với các phụ kiện, bạn đã có ngay một set đồ hoàn hảo để tự tin đến nơi công sở hoặc dạo phố.</p>
                                        <p><img title="Giày Thể Thao Nam MWC NATT - 5256" src="https://mwc.com.vn/FolderUpload/5256/02dbccb9f2b10fef56a0.jpg" alt="Giày Thể Thao Nam MWC NATT - 5256" width="790" height="939">
                                            <img title="Giày Thể Thao Nam MWC NATT - 5256" src="https://mwc.com.vn/FolderUpload/5256/2c0eebbed5b628e871a7.jpg" alt="Giày Thể Thao Nam MWC NATT - 5256" width="659" height="659">
                                            <img title="Giày Thể Thao Nam MWC NATT - 5256" src="https://mwc.com.vn/FolderUpload/5256/2c10be2080287d762439.jpg" alt="Giày Thể Thao Nam MWC NATT - 5256" width="800" height="800">
                                            <img title="Giày Thể Thao Nam MWC NATT - 5256" src="https://mwc.com.vn/FolderUpload/5256/380c892cb7244a7a1335.jpg" alt="Giày Thể Thao Nam MWC NATT - 5256" width="749" height="749">
                                            <img title="Giày Thể Thao Nam MWC NATT - 5256" src="https://mwc.com.vn/FolderUpload/5256/49ffe723d92b24757d3a.jpg" alt="Giày Thể Thao Nam MWC NATT - 5256" width="745" height="745"></p>
                                    </div>
                                </div>

                                <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                    <h3>Bước 1: Đặt một mảnh giấy lên trên sàn nhà</h3>
                                    <p>Bạn sẽ sử dụng mảnh giấy này để vẽ bàn chân mình lên trên, do đó đừng sử dụng thảm hay bất cứ vật dụng khác có chất liệu khó vẽ nhé!</p>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20151656/cach-do-size-giay-b1e.png" alt="">

                                    <h3>Bước 2: Đặt bàn chân trần ngay ngắn lên trên mặt giấy</h3>
                                    <p>Bạn có thể ngồi trên ghế hoặc đứng im, miễn là giữ cho bàn chân cố định và đặt bàn chân vuông góc với mép giấy.
                                        <br>
                                        Đảm bảo rằng nền nhà là mặt phẳng để việc đo đạc chính xác nhất.</p>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20150719/cach-do-size-giay-b2.png" alt="">

                                    <h3>Bước 3: Vẽ bàn chân</h3>
                                    <p>Sử dụng bút chì hoặc bút bi để vẽ theo mép bàn chân như hình vẽ.
                                        <br>
                                        Hãy đảm bảo rằng khi kết thúc, hình bàn chân nằm giữa mặt giấy hình chữ nhật.</p>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20150746/cach-do-size-giay-b3.png" alt="">

                                    <h3>Bước 4: Phác thảo bàn chân bằng đường thẳng</h3>
                                    <p>Sử dụng thước kẻ, vẽ một đường thẳng bên cạnh mỗi mặt bàn chân: cạnh ngón chân, gót chân và hai bên.</p>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20150814/cach-do-size-giay-b4.png" alt="">

                                    <h3>Bước 5: Đo chiều dài và độ rộng bàn chân</h3>
                                    <p>Sử dụng thước kẻ, đo chiều dài và chiều rộng của hình vuông mà bạn vừa vẽ bao quanh hình bàn chân.</p>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20150902/cach-do-size-giay-b5.png" alt="">
                                    <p>Ghi lại số liệu vừa đo được.</p>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20151037/image96.png" alt=""> <br>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20151106/image87.png" alt="">
                                    <p>Nhiều đôi giày còn có size bề rộng (theo đơn vị tính là inch và milimet), kéo dài từ size AA, A,B,C,D,E,EE và EEEE.Trong đó, B là size trung bình đối với phụ nữ và D là size trung bình đối với nam giới.</p>
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/canifablog/blog/wp-content/uploads/2017/09/20151233/image104.png" alt="">
                                </div>

                                <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h3 class="head">23 Đánh giá</h3>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Phạm Thành Tú</span>
                                                        <span class="text-right">20-07-2020</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-half"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Chất lượng sản phẩm tốt. Uy tín, giao hàng nhanh chóng. Chất lượng phục vụ tốt.</p>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Đặng Hòa Nhi</span>
                                                        <span class="text-right">20-07-2020</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-half"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Chất lượng sản phẩm tốt. Uy tín, giao hàng nhanh chóng. Chất lượng phục vụ tốt.</p>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Trần Thị Phương</span>
                                                        <span class="text-right">21-07-2020</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-half"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Chất lượng sản phẩm tốt. Uy tín, giao hàng nhanh chóng. Chất lượng phục vụ tốt.</p>
                                                </div>
                                            </div>
                                            <div class="review">
                                                <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                                <div class="desc">
                                                    <h4>
                                                        <span class="text-left">Ngô Thị Thương</span>
                                                        <span class="text-right">22-07-2020</span>
                                                    </h4>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-half"></i>
                                                            <i class="icon-star-empty"></i>
                                                        </span>
                                                        <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                    </p>
                                                    <p>Chất lượng sản phẩm tốt. Uy tín, giao hàng nhanh chóng. Chất lượng phục vụ tốt.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="rating-wrap">
                                                <h3 class="head">Đánh giá</h3>
                                                <div class="wrap">
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            (98%)
                                                        </span>
                                                        <span>20 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (85%)
                                                        </span>
                                                        <span>10 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (70%)
                                                        </span>
                                                        <span>5 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (10%)
                                                        </span>
                                                        <span>0 Reviews</span>
                                                    </p>
                                                    <p class="star">
                                                        <span>
                                                            <i class="icon-star-full"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            <i class="icon-star-empty"></i>
                                                            (0%)
                                                        </span>
                                                        <span>0 Reviews</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
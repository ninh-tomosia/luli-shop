<?php

    $sql = 'SELECT * FROM slides, sanpham WHERE slides.sanpham = sanpham.masp AND slides.trangthai = 1';

    $rs = mysqli_query($conn, $sql);

?>
<aside id="colorlib-hero">
     <div class="flexslider">
          <ul class="slides">
               <?php while($row = mysqli_fetch_array($rs)){ ?>
                    <li style="background-image: url(<?php if (substr($row['anh'], 0, 4) == "http") {echo $row['anh']; }else{echo "./upload/". $row['anh'];} ?>);">
                         <div class="overlay"></div>
                         <div class="container-fluid">
                              <div class="row">
                                   <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                        <div class="slider-text-inner">
                                             <div class="desc">
                                                  <h1 class="head-1"><?php echo $row['tieude']; ?></h1>
                                                  <h2 class="head-2"><?php echo $row['tensp']; ?></h2>
                                                  <p class="category cst-style"><span style="color: red; font-weight: 600; font-size: 40px;"><?php echo $row['noidung']; ?></span></p>
                                                  <p><a href="#" class="btn btn-primary">Xem ngay</a></p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </li>
               <?php } ?>
          </ul>
     </div>
</aside>

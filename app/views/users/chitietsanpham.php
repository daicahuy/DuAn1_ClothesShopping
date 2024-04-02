<!-- content -->
<div id="content">

    <div class="product-page container">

        <div class="row">
            <div class="col-md-6">
                <div class="single-img">
                    <div class="sp-wrap">
                        <a href="<?php echo SWEETPICK_URL ?>images/1.jpg"><img src="<?php echo SWEETPICK_URL ?>images/1_tb.jpg" alt=""></a>
                        <a href="<?php echo SWEETPICK_URL ?>images/2.jpg"><img src="<?php echo SWEETPICK_URL ?>images/2_tb.jpg" alt=""></a>
                        <a href="<?php echo SWEETPICK_URL ?>images/3.jpg"><img src="<?php echo SWEETPICK_URL ?>images/3_tb.jpg" alt=""></a>
                        <a href="<?php echo SWEETPICK_URL ?>images/4.jpg"><img src="<?php echo SWEETPICK_URL ?>images/4_tb.jpg" alt=""></a>
                        <a href="<?php echo SWEETPICK_URL ?>images/5.jpg"><img src="<?php echo SWEETPICK_URL ?>images/5_tb.jpg" alt=""></a>
                        <a href="<?php echo SWEETPICK_URL ?>images/6.jpg"><img src="<?php echo SWEETPICK_URL ?>images/6_tb.jpg" alt=""></a>
                    </div>
                    <div id="test"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-desc">
                    <div class="top-single">
                        <span>Trang chủ / Chi tiết sản phẩm / Áo siêu cấp</span>
                        <div class="right-arrows">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="middle-single">
                        <h1><?= $SanPhamID['ten_san_pham'] ?></h1>

                        <img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt="">

                        <div class="reviews">
                            <a href="#">21 Bình luận</a>
                        </div>
                        <div class="clear"></div>

                    </div>

                    <div class="single-price">
                        <ul>
                            <!-- GIAM GIA -->
                            <!-- <li><span class="high-price">300000 VNĐ</span></li>
                        <li><span class="low-price">500000 VNĐ</span></li> -->

                            <!-- SAN PHAM BIEN THE -->
                            <!-- <p class="low-price">300000 - 500000 VNĐ</p> -->

                            <!-- SAN PHAM BINH THUONG -->
                            <?php if (($SanPhamID['so_luong'] == NULL)) : ?>
                                <p class="low-price">
                                    <?= $SanPhamID['gia'] + $SanPhamID['gia_bien_dong'] ?>
                                </p>
                            <?php else : ?>
                                <p class="low-price">
                                    <?= $SanPhamID['gia']  ?> VND
                                </p>
                            <?php endif ?>

                        </ul>
                    </div>

                    <div class="single-infos">
                        <!-- <p><span>Số lượng tồn kho:<?= $SanPhamID['so_luong'] ?></span>  </p> -->
                    </div>
                    <?php if ($SanPhamID['so_luong'] == NULL) : ?>
                        <div class="single-inputs row">
                            <div class="col-md-6">
                                <select class="select">

                                    <option value="Select Size">Select Size</option>
                                    
                                    <?php foreach ($SanPhamID as $key => $kich_thuoc) : ?>
                                        <option value="<?= $kich_thuoc['ma_kich_thuoc'] ?>"><?= $kich_thuoc['ten_kich_thuoc'] ?></option>
                                    <?php endforeach; ?>


                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="select">
                                    <option value="Select Color">Select Color</option>

                                    <?php foreach ($SanPhamID as $key => $ma_sac) : ?>
                                        <option value="<?= $ma_sac['ma_mau_sac'] ?>"><?= $mau_sac['ma_mau_sac'] ?></option>
                                    <?php endforeach; ?>
                              

                                </select>
                            </div>
                        </div>
                        <?php endif; ?>


                        <div class="prod-end">
                            <a href="#" class="medium-button button-red add-cart">Add to Cart</a>
                            <input type="text" placeholder="1">
                            <div class="clear"></div>

                        </div>

                        <div class="share">
                            <span>Share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>

                </div>
            </div>
        </div>

    </div>
    <!-- End Product Single -->

    <div class="tabs-single">
        <div class="container">

            <div id="tabs">
                <ul>
                    <li class="active"><a href="#tabs-1">Mô tả</a></li>
                    <li><a href="#tabs-2">Bình luận</a></li>
                </ul>
                <div class="tab-border"></div>
                <div id="tabs-1">
                    <p>
                        <?= $SanPhamID['mo_ta'] ?>
                    </p>
                </div>
                <div id="tabs-2">
                    <div>
                        <?php foreach ($listBinhLuan as $bl) : ?>
                            <div style="width: 50%;">
                                <p><strong><?= $bl['ho_va_ten'] ?></strong></p>
                                <p><?= $bl['noi_dung'] ?></p>
                                <p>
                                    <?= $bl['ngay_binh_luan'] ?>
                                    <span style="display: inline-spock; margin-left: 30px;">
                                        <a href="">Trả lời</a>
                                    </span>
                                </p>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div style="display: flex; align-items: center;" class="mt50">
                        <div class="col-md-4" style="padding: 0;">
                            <input style="width: 100%;" type="text" name="" id="" placeholder="Viết bình luận của bạn">
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="small-button button-red" style="display: spock; height: 100%;">Gửi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End First Tabs -->


        </div>
    </div>
    <!-- End tab Signle -->


    <div class="feat-items mb30">
        <div class="container">
            <h1>Sản phẩm tương tự</h1>
            <div class="list_carousel1 responsive">
                <div class="row">
                    <div class="col-md-3 grid-item mb30">
                        <div class="arrival-overlay">
                            <img src="<?php echo SWEETPICK_URL ?>upload/arrival1.jpg" alt="">
                            <p class="new" style="padding: 4px; background-color: red; color: #fff;">
                                Giảm giá 50%
                            </p>
                            <div class="arrival-mask">
                                <a href="#" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
                                <a href="#" class="wishlist">Xem chi tiết</a>
                            </div>
                        </div>
                        <div class="arr-content">
                            <a href="#">
                                <p>Áo chống nước</p>
                            </a>
                            <p class="high-price">6000000 VND</p>
                            <p class="low-price">3000000 VND</p>

                            <div class="stars"><img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-item mb30">
                        <div class="arrival-overlay">
                            <img src="<?php echo SWEETPICK_URL ?>upload/arrival1.jpg" alt="">
                            <p class="new" style="padding: 4px; background-color: red; color: #fff;">
                                Giảm giá 50%
                            </p>
                            <div class="arrival-mask">
                                <a href="#" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
                                <a href="#" class="wishlist">Xem chi tiết</a>
                            </div>
                        </div>
                        <div class="arr-content">
                            <a href="#">
                                <p>Áo chống nước</p>
                            </a>
                            <p class="high-price">6000000 VND</p>
                            <p class="low-price">3000000 VND</p>

                            <div class="stars"><img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="arrows">
                    <a id="prev1" class="prev1" href="#"><i class="fa fa-angle-left"></i></a>
                    <a id="next1" class="next1" href="#"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- End List Carousel -->
        </div>
    </div>

</div>
<!-- End content -->
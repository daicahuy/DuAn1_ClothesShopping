<!-- content -->
<div id="content">

    <div class="product-page container">

        <div class="row">
            <div class="col-md-6">
                <div class="single-img">
                    <div class="sp-wrap">
                        <a href="<?php echo IMAGES_URL . $sanpham["anh"] ?>">
                            <img src="<?php echo IMAGES_URL . $sanpham["anh"] ?>" alt="">
                        </a>
                        <?php foreach($listBoSuuTap as $boSuuTap ) : ?>
                            <a href="<?php echo IMAGES_URL . $boSuuTap["anh"] ?>">
                                <img src="<?php echo IMAGES_URL . $boSuuTap["anh"] ?>" alt="">
                            </a>
                        <?php endforeach?>
                    </div>
                    <div id="test"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-desc">
                    <div class="top-single">
                        <span>Trang chủ / Chi tiết sản phẩm / <?php echo $sanpham["ten_san_pham"]?></span>
                        <div class="right-arrows">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="middle-single">
                        <h1 style="position: relative;">
                            <?php echo $sanpham['ten_san_pham'] ?>
                            <?php if(!($sanpham['ma_giam_gia'] == NULL)) : ?>
                                <?php $giam_gia = getGiamGiaID($sanpham['ma_giam_gia']); ?>
                                <span
                                    style="
                                        background-color: red;
                                        font-size: medium;
                                        color:#fff;
                                        padding: 1px 6px;
                                        margin-left: 16px;
                                    "
                                        
                                >
                                    <?php echo $giam_gia["ten_giam_gia"] ?>
                                </span>
                            <?php endif ?>
                        </h1>
                        <img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt="">

                        <div class="reviews">
                            <a href="#">10 Bình luận</a>
                        </div>

                    </div>

                    <div class="single-price">
                        <ul>
                            <?php
                                $giaBienDongMax = getGiaChiTietSanPhamIDSanPham($sanpham["ma_san_pham"]);
                                $giaBienDongMin = getGiaChiTietSanPhamIDSanPham($sanpham["ma_san_pham"], false);
                                $tienMin = $sanpham["gia"] + $giaBienDongMin[0];
                                $tienMax = $sanpham["gia"] + $giaBienDongMax[0];
                            ?>
                            <?php if (!($sanpham['ma_giam_gia'] == NULL)) { ?>
                                <?php if($sanpham["so_luong"] == NULL) : ?>
                                    <?php
                                        $tienGiamGiaMin = ($giam_gia["giam_gia"]/100)*($tienMin);
                                        $tienGiamGiaMax = ($giam_gia["giam_gia"]/100)*($tienMax);
                                    ?>
                                    <li>
                                        <span class="high-price">
                                            <?php echo $tienMin ?> VNĐ - 
                                            <?php echo $tienMax ?> VNĐ
                                        </span>
                                    </li>
                                    <li>
                                        <span class="low-price">
                                            <?php echo $tienMin - $tienGiamGiaMin ?> VNĐ - 
                                            <?php echo $tienMax - $tienGiamGiaMax ?> VNĐ
                                        </span>
                                    </li>
                                <?php else : ?>
                                    <?php
                                        $tienGiamGia = $giam_gia["giam_gia"]/100*$sanpham["gia"];
                                    ?>
                                    <li>
                                        <span class="high-price"><?php echo $sanpham["gia"] ?> VNĐ</span>
                                    </li>
                                    <li>
                                        <span class="low-price"><?php echo $sanpham["gia"] - $tienGiamGia ?> VNĐ</span>
                                    </li>
                                <?php endif ?>
                            <?php } else { ?>
                                <?php if($sanpham["so_luong"] == NULL) : ?>
                                    <p class="low-price">
                                        <?php echo $tienMin ?> VNĐ - 
                                        <?php echo $tienMax ?> VNĐ
                                    </p>
                                <?php else : ?>
                                    <p class="low-price"><?php echo $sanpham["gia"] ?> VNĐ</p>
                                <?php endif ?>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="single-infos">
                        <p>
                            <span>
                                Số lượng tồn kho:
                                <?php if($sanpham["so_luong"] == NULL) : ?>
                                    <?php
                                        $soLuong = countSoLuongChiTietSanPham($sanpham["ma_san_pham"]);
                                        echo $soLuong["so_luong"];
                                    ?>
                                <?php else : ?>
                                    <?php echo $sanpham['so_luong'] ?>
                                <?php endif ?>
                            </span>
                        </p>
                    </div>
                    <?php if ($sanpham['so_luong'] == NULL) : ?>
                        <?php
                            $listSize = getSizeChiTietSanPham($sanpham["ma_san_pham"]);
                            $listColor = getColorChiTietSanPham($sanpham["ma_san_pham"]);    
                        ?>
                        <div class="single-inputs row variants">
                            <div class="col-md-6">
                                <select class="select variants-size">

                                    <option value="Select Size" disabled selected >Chọn Kích Thước</option>
                                    
                                    <?php foreach ($listSize as $key => $size) : ?>
                                        <option value="<?= $size['ma_kich_thuoc'] ?>"><?= $size['ten_kich_thuoc'] ?></option>
                                    <?php endforeach; ?>


                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="select variants-color">
                                    <option value="Select Color" disabled selected>Chọn Màu Sắc</option>

                                    <?php foreach ($listColor as $key => $color) : ?>
                                        <option value="<?= $color['ma_mau_sac'] ?>"><?= $color['ten_mau'] ?></option>
                                    <?php endforeach; ?>
                              

                                </select>
                            </div>
                        </div>
                    <?php endif ?>


                    <div class="prod-end">
                        <a href="#" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
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
                        <?= $sanpham['mo_ta'] ?>
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

<script>

    let variants = document.querySelector('.variants');
    let variantsSize = document.querySelector('.variants-size');
    let variantsColor = document.querySelector('.variants-color');

    let urlParams = new URLSearchParams(window.location.search);
    
    let idSanPham = urlParams.get('maSanPham');
    let size;
    let color;

    variantsSize.addEventListener('input', () => {
        size = variantsSize.value
    })
    variantsColor.addEventListener('input', () => {
        color = variantsColor.value
    })

    variants.onchange = function() {
        if(size !== undefined && color !== undefined) {
            let postData = {
                id: idSanPham,
                size: size,
                color: color
            }

            fetch("http://localhost/DuAn1_ClothesShopping/app/controllers/users/DetailProductControllers.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(postData)
            })
            .then(response => {
                return response.json()
            })
            .then(data => {
                console.log(data)
            })
            .catch(error => {
                console.log(error)
            })
        }
    }
</script>
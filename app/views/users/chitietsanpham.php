<!-- content -->
<div id="content">

    <div class="product-page container">

        <div class="row">
            <div class="col-md-6">
                <div class="single-img">
                    <div class="sp-wrap">
                        <?php if(isset($detailProduct)) : ?>
                            <?php if($detailProduct) : ?>
                                <a href="<?php echo IMAGES_URL . $detailProduct["anh_chi_tiet"] ?>">
                                    <img src="<?php echo IMAGES_URL . $detailProduct["anh_chi_tiet"] ?>" alt="">
                                </a>
                            <?php else : ?>
                                <a href="<?php echo IMAGES_URL . $sanpham["anh"] ?>">
                                    <img src="<?php echo IMAGES_URL . $sanpham["anh"] ?>" alt="">
                                </a>
                            <?php endif ?>
                        <?php else : ?>
                            <a href="<?php echo IMAGES_URL . $sanpham["anh"] ?>">
                                <img src="<?php echo IMAGES_URL . $sanpham["anh"] ?>" alt="">
                            </a>
                        <?php endif ?>
              
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

                <?php if(isset($errors)) : ?>
                    <?php foreach($errors as $error ) : ?>
                        <div class="alert alert-danger" role="alert">
                            Lỗi: <?php echo $error ?>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
                <form action="?url=chitietsanpham&maSanPham=<?php echo $sanpham["ma_san_pham"] ?>" method="post">
                    <input
                        type="hidden"
                        name="maChiTietSanPham"
                        value="<?php
                            if(isset($detailProduct)) {
                                if($detailProduct) {
                                    echo $detailProduct['ma_chi_tiet_san_pham'];
                                }
                            }
                            if($sanpham["so_luong"] !== NULL) {
                                $chiTietSanPhamIdSanPhamBinhThuong = getChiTietSanPhamIDSanPhamBinhThuong($sanpham["ma_san_pham"]);
                                echo $chiTietSanPhamIdSanPhamBinhThuong["ma_chi_tiet_san_pham"];
                            }
                        ?>"
                    >
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
                                <?php if($sanpham["so_luong"] == NULL) : ?>
                                    <p class="low-price">
                                        <?php echo $tienMin ?> VNĐ -
                                        <?php echo $tienMax ?> VNĐ
                                    </p>
                                <?php else : ?>
                                    <p class="low-price"><?php echo $sanpham["gia"] ?> VNĐ</p>
                                <?php endif ?>
                            </ul>
                        </div>
                    
                        <?php if(isset($detailProduct)) : ?>
                            <?php if($detailProduct) : ?>
                                <div class="single-infos">
                                    <p><span>Số lượng trong kho: <?php echo $detailProduct['so_luong'] ?></span></p>
                                </div>
                                <input type="hidden" name="so_luong_bien_the" value="<?php echo $detailProduct['so_luong']?>">
                            <?php endif ?>
                        <?php endif ?>
                        <?php if($sanpham["so_luong"] != NULL) : ?>
                            <div class="single-infos">
                                <p><span>Số lượng trong kho: <?php echo $sanpham['so_luong'] ?></span></p>
                            </div>
                        <?php endif ?>
                        <input type="hidden" name="so_luong" value="<?php echo $sanpham["so_luong"] ?>">
                        <?php if ($sanpham['so_luong'] == NULL) : ?>
                            <?php
                                $listSize = getSizeChiTietSanPham($sanpham["ma_san_pham"]);
                                $listColor = getColorChiTietSanPham($sanpham["ma_san_pham"]);
                            ?>
                                <div class="single-inputs row variants">
                                    <div class="col-md-6">
                                        <select class="select variants-size" name="size">
                                            <option
                                                value="undefined"
                                                <?php if(!isset($maKichThuoc)) : ?>
                                                    <?php echo "disabled selected"?>
                                                <?php else : ?>
                                                    <?php echo "disabled" ?>
                                                <?php endif ?>
                                            >
                                                Chọn Kích Thước
                                            </option>
                    
                                            <?php foreach ($listSize as $key => $size) : ?>
                                                <option
                                                    value="<?= $size['ma_kich_thuoc'] ?>"
                                                    <?php if(isset($maKichThuoc)) : ?>
                                                        <?php echo $maKichThuoc == $size["ma_kich_thuoc"] ? 'selected' : ''?>
                                                    <?php endif ?>
                                                >
                                                    <?= $size['ten_kich_thuoc'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="select variants-color" name="color">
                                            <option
                                                value="undefined"
                                                <?php if(!isset($maMauSac)) : ?>
                                                    <?php echo "disabled selected"?>
                                                <?php else : ?>
                                                    <?php echo "disabled" ?>
                                                <?php endif ?>
                                            >
                                                Chọn Màu Sắc
                                            </option>
                                            <?php foreach ($listColor as $key => $color) : ?>
                                                <option
                                                    value="<?= $color['ma_mau_sac'] ?>"
                                                    <?php if(isset($maMauSac)) : ?>
                                                        <?php echo $maMauSac == $color["ma_mau_sac"] ? 'selected' : ''?>
                                                    <?php endif ?>
                                                >
                                                    <?= $color['ten_mau'] ?>
                                                </option>
                                            <?php endforeach; ?>
                    
                                        </select>
                                    </div>
                                </div>
                        <?php endif ?>
                        <?php if(isset($detailProduct)) : ?>
                            <div class="single-inputs">
                                <?php if($detailProduct) : ?>
                                    <p style="font-family: 'Noticia Text'; font-size: 23px; font-weight: bold; color: #ea5748;">
                                        <?php echo $sanpham["gia"]+$detailProduct["gia_bien_dong"]?> VNĐ
                                    </p>
                                <?php else : ?>
                                    <p style="font-family: 'Noticia Text'; font-size: 20px; font-weight: bold;">
                                        <?php echo "Không có biến thể này" ?>
                                    </p>
                                <?php endif ?>
                            </div>
                        <?php endif ?>
                    
                        <div class="prod-end">
                            <button 
                                class="btn medium-button button-red add-cart"
                                type="submit"
                                name="btn-add-cart"
                            >
                            Thêm vào giỏ hàng
                            </button>
                            <button
                                style="display: none;"
                                type="submit"
                                name="btn-load-variants"
                                class="btn-load-variants"
                            >
                                loadvariants
                            </button>
                            <input type="text" placeholder="1" name="so_luong_muon_mua" value="<?php echo $soLuongMuonMua ?? ''?>">
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
                </form>
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
    let btnLoadVariants = document.querySelector('.btn-load-variants');

    let urlParams = new URLSearchParams(window.location.search);
  
    let idSanPham = urlParams.get('maSanPham');

    let size = variantsSize.value;
    let color = variantsColor.value;
    
    variantsSize.addEventListener('change', () => {
        size = variantsSize.value
    })
    variantsColor.addEventListener('change', () => {
        color = variantsColor.value
    })
    
    variants.onchange = function() {
        if(size != "undefined" && color != "undefined") {
            btnLoadVariants.click();
        }
    }
                            
 
</script>
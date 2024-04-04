<!-- content -->
<div id="content">


    <div class="shop-main container">
        <div class="row">
            <div class="col-md-3">
                <aside class="left-shop">

                    <div class="shop-categories mb30">
                        <h1 class="asidetitle">Danh Mục</h1>
                        <?php if ($maLoai == 1) { ?>
                            <ul>
                                <?php  ?>
                                <li><a href="?url=loc&ma_loai=1&ma_danh_muc=0">Tất cả cả sản phẩm <span><?= $soLuongTatCaSanPham[0]['so_luong_san_pham'] ?></span></a></li>
                                <?php foreach ($danhMucs as $key => $danhMuc) : ?>
                                    <!-- đếm số lượng sản phẩm từng danh mục  -->
                                    <?php $soLuongSanPhams = soLuongSanPhamDanhMuc($danhMuc['ma_danh_muc'], $maLoai); ?>
                                    <li>
                                        <a href="?url=loc&ma_loai=1&ma_danh_muc=<?= $danhMuc['ma_danh_muc'] ?>"><?= $danhMuc['ten_danh_muc'] ?>
                                            <?php foreach ($soLuongSanPhams as $key => $soLuongSanPham) : ?>
                                                <span>
                                                    <?= $soLuongSanPham['so_luong_san_pham'] ?>
                                                </span>
                                            <?php endforeach;   ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php } ?>

                        <!-- Nữ  -->
                        <?php if ($maLoai == 2) { ?>
                            <ul>
                                <li><a href="?url=loc&ma_loai=2&ma_danh_muc=0">Tất cả cả sản phẩm <span><?= $soLuongTatCaSanPham[0]['so_luong_san_pham'] ?></span></a></li>
                                <?php foreach ($danhMucs as $key => $danhMuc) : ?>
                                    <?php $soLuongSanPhams = soLuongSanPhamDanhMuc($danhMuc['ma_danh_muc'], $maLoai); ?>
                                    <li>
                                        <a href="?url=loc&ma_loai=2&ma_danh_muc=<?= $danhMuc['ma_danh_muc'] ?>"><?= $danhMuc['ten_danh_muc'] ?>
                                            <?php foreach ($soLuongSanPhams as $key => $soLuongSanPham) : ?>
                                                <span>
                                                    <?= $soLuongSanPham['so_luong_san_pham'] ?>
                                                </span>
                                            <?php endforeach ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        <?php } ?>


                    </div>
                    <!-- FORM  -->
                    <form action="
                    <?php if ($maLoai == 1) {
                        echo "?url=loc&ma_loai=1";
                    } ?>
                    <?php if ($maLoai == 2) {
                        echo "?url=loc&ma_loai=2";
                    } ?>
                    " method="POST">

                        <div class="shop-price mb30">
                            <h1 class="asidetitle">Giá</h1> <!--  PRICE  -->


                            <p>
                                <input type="text" id="amount" name="price">
                            </p>


                            <div id="slider-range"></div>


                        </div>

                        <div class="acc-bordered">
                            <div class="accordion">
                                <div id="accordion-container">
                                    <h2 class="accordion-header">Màu sắc</h2>

                                    <div class="accordion-content">
                                        <div class="brands mb30">
                                            <!-- COLOR  -->
                                            <!-- <form action="#"> -->
                                            <ul>
                                                <?php foreach ($getMauSacs as $key => $getMauSac) : ?>
                                                    <li>
                                                        <input type="checkbox" value="<?= $getMauSac['ma_mau_sac'] ?>" name="ma_mau_sac[]" 
                                                        <?php
                                                                if (isset($_POST['ma_mau_sac']) && in_array($getMauSac['ma_mau_sac'], $_POST['ma_mau_sac'])) {
                                                                    // kiểm tra khởi tạo, kiêm tra xm gữ liệu gửi đi không
                                                                    // in_arry kiếm tra giá cụ thể có trong mảng không  ở đây càn tìm  getMauSac trong mảng $_POST
                                                                    echo 'checked';
                                                                }
                                                            ?>
                                                            >
                                                        <?= $getMauSac['ten_mau'] ?>
                                                        <span><?= $getMauSac['so_luong_san_pham'] ?></span>
                                                    </li>
                                                <?php endforeach ?>

                                            </ul>
                                            <!-- </form> -->

                                        </div>
                                    </div>
                                    <h2 class="accordion-header">Sizes</h2>
                                    <div class="accordion-content">
                                        <div class="brands mb30">
                                            <!-- SIZE  -->
                                            <!-- <form action="#"> -->
                                            <ul>
                                                <?php foreach ($getKichThuocs as $key => $getKichThuoc) : ?>
                                                    <li>
                                                    <input type="checkbox" value="<?= $getKichThuoc['ma_kich_thuoc'] ?>" name="ma_kich_thuoc[]" 
                                                    <?php echo (isset($_POST['ma_kich_thuoc']) && in_array($getKichThuoc['ma_kich_thuoc'], $_POST['ma_kich_thuoc'])) ? 'checked' : '' ?>
                                                    >
                                                    <?= $getKichThuoc['ten_kich_thuoc'] ?>
                                                    <span><?= $getKichThuoc['so_luong_san_pham'] ?></span>
                                                    </li>
                                                <?php endforeach ?>



                                            </ul>
                                            <!-- </form> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion -->
                        </div>
                        <button type="submit" class="medium-button button-red mt20" style="border: none;">
                                Lọc
                            </button>
                        <?php if ($maLoai == 1) { ?>
                            
                            <!-- <a href="#" class="medium-button button-red mt20" >Lọc</a> -->
                        <?php } ?>

                       



                    </form>
                </aside>
                <!-- End aside shop -->
            </div>

            <div class="col-md-9">
                <div class="shop-content">
                    <div class="toolbar">
                        <div class="sort-select">
                            <label>Sắp xếp theo</label>
                            <select class="selectBox">
                                <option>Mặc định</option>
                                <option>Giá tăng dần</option>
                                <option>Giá giảm dần</option>
                            </select>
                        </div>
                        <div class="sort-select">
                            <label>Hiển thị</label>
                            <select class="selectBox">
                                <option>12</option>
                                <option>16</option>
                                <option>20</option>
                            </select>
                        </div>
                        <div class="lg-panel htabs">
                            <span>View</span>
                            <a href="#!" id="list" class="list-btn"><i class="fa fa-th-list"></i></a>
                            <a href="#!" id="grid" class="grid-btn active"><i class="fa fa-th"></i></a>
                        </div>
                    </div>

                    <div class="row shop-grid">
                        <?php foreach ($sanPhams as $key => $sanpham) : ?>

                            <div class="col-md-4 grid-item mb30">
                                <div class="arrival-overlay">
                                    <img src="<?php echo IMAGES_URL . $sanpham['anh'] ?>" alt="">

                                    <div class="arrival-mask">
                                        <a href="?url=chitietsanpham&maSanPham=<?= $sanpham['ma_san_pham'] ?>" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
                                        <a href="?url=chitietsanpham&maSanPham=<?= $sanpham['ma_san_pham'] ?>" class="wishlist">Xem chi tiết</a>
                                    </div>
                                </div>
                                <div class="arr-content">
                                    <a href="#"><p><?= $sanpham['ten_san_pham'] ?></p></a>
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

                                    <div class="stars"><img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt=""></div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>

                    <div class="shop-pag">
                        <p class="pag-p">Items <span>1 to 12</span> of 78 Total</p>

                        <div class="right-pag">
                            <div class="sort-select">
                                <label>Show</label>
                                <select class="selectBox">
                                    <option>12</option>
                                    <option>24</option>
                                    <option>36</option>
                                </select>
                            </div>

                            <div class="pagenation clearfix">
                                <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End content -->
<!-- content -->
<div id="content">

    <div class="checkout">

        <div class="container">

            <div class="check-anchor clearfix mb40">
                <div class="holder">
                    <ul>
                        <li class="active"><a href="#!"><i class="fa fa-star"></i> Giỏ hàng </a></li>
                        <li><a href="#!"><i class="fa fa-star"></i> Thanh toán </a></li>
                        <li><a href="#!"><i class="fa fa-star"></i> Đơn hàng thành công <i class="fa fa-star"></i></a></li>
                    </ul>
                    <div class="holder-border"></div>
                </div>
            </div>

            <div class="check-infos">
                <div class="row">
                    <div class="col-md-8">
                        <?php foreach($productsInCart as $productInCart) : ?>
                            <div class="check-details">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th style="text-align: center;">Ảnh</th>
                                    <th>Chi tiết sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                    <tbody class="check-body">
                                        <?php if($productInCart["so_luong"] == NULL) : ?>
                                            <?php
												$kichThuoc = getKichThuocID($productInCart["ma_kich_thuoc"]);
												$mauSac = getMauSacID($productInCart["ma_mau_sac"]);
												$sumCart += ($productInCart["gia"] + $productInCart["gia_bien_dong"])*$productInCart["so_luong_muon_mua"];
											?>
                                            <tr>
                                                <td><img src="<?php echo IMAGES_URL . $productInCart["anh_chi_tiet"] ?>" alt="" width="120px"></td>
                                                <td>
                                                    <h6><?php echo $productInCart["ten_san_pham"] ?></h6>
                                                    <p>Size: <span><?php echo $kichThuoc["ten_kich_thuoc"]?></span></p>
                                                    <p><?php echo $mauSac["ten_mau"] ?></p>
                                                </td>
                                                <td><?php echo $productInCart["gia"] + $productInCart["gia_bien_dong"] ?> VNĐ</td>
                                                <td><input type="text" placeholder="1" value="<?php echo $productInCart["so_luong_muon_mua"]?>"></td>
                                                <td><?php echo ($productInCart["gia"] + $productInCart["gia_bien_dong"])*$productInCart["so_luong_muon_mua"] ?> VNĐ</td>
                                                <td>
                                                    <a
                                                        href="?url=xoasanphamgiohang&maChiTietSanPham=<?php echo $productInCart["ma_chi_tiet_san_pham"] ?>&view=<?php echo $params ?>"
                                                        onclick="return confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không ?')"
                                                    >
                                                        <img src="<?php echo IMAGES_URL ?>delete.png" alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php else : ?>
                                            <?php $sumCart += $productInCart["gia"]*$productInCart["so_luong_muon_mua"]; ?>
                                            <tr>
                                                <td><img src="<?php echo IMAGES_URL . $productInCart["anh"] ?>" alt="" width="120px"></td>
                                                <td>
                                                    <h6><?php echo $productInCart["ten_san_pham"] ?></h6>
                                                </td>
                                                <td><?php echo $productInCart["gia"] ?> VNĐ</td>
                                                <td><input type="text" placeholder="1" value="<?php echo $productInCart["so_luong_muon_mua"]?>"></td>
                                                <td><?php echo $productInCart["gia"]*$productInCart["so_luong_muon_mua"] ?> VNĐ</td>
                                                <td>
                                                    <a
                                                        href="?url=xoasanphamgiohang&maChiTietSanPham=<?php echo $productInCart["ma_chi_tiet_san_pham"] ?>&view=<?php echo $params ?>"
                                                        onclick="return confirm('Bạn có muốn xóa sản phẩm này khỏi giỏ hàng không ?')"
                                                    >
                                                        <img src="<?php echo IMAGES_URL ?>delete.png" alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-4">
                        <?php if($sumCart !== 0) :  ?>
                            <div class="check-aside">
                                <div class="orders mb20">
                                    <h6>Tổng giỏ hàng</h6>
                                    <p>Tổng đơn hàng: <span><?php echo $sumCart ?> VNĐ</span></p>
                                </div>
                                <a
                                    href="?url=xoatoanbogiohang&view=<?php echo $params ?>"
                                    class="medium-button button-brown mb10"
                                    style="width: 100%;"
                                    onclick="return confirm('Bạn có muốn xóa toàn bộ giỏ hàng không ?')"
                                >
                                    Xóa toàn bộ giỏ hàng
                                </a>
                                <a
                                    href="?url=thanhtoan"
                                    class="medium-button button-red mb10 float-right"
                                    style="width: 100%;"
                                >
                                    Tiến hành thanh toán
                                </a>
                            </div>
                        <?php endif ?>
                    </div>
                    <?php if(!$productsInCart) : ?>
                        <div class="col-md-12">
                            <div class="check-details">
                                <div style="text-align: center;">
                                    <img style="width: 300px;" src="<?php echo IMAGES_URL ?>no-product.png" alt="">
                                </div>
                                <h4 style="text-align: center; line-height: 22px;">
                                    Không có sản phẩm nào
                                </h4>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>

        </div>

    </div>
    <!-- End Product Single -->

</div>
<!-- End content -->
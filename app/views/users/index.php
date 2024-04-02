	<!-- Slider -->
	<div class="slider heightski">
		<div class="fullwidthbanner-container">
			<div class="fullwidthbanner" id="intro">
				<ul>
					</li>
					<!-- second SLIDE -->
					<li data-transition="random" data-slotamount="10" data-masterspeed="300">
						<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
						<img src="<?php echo SWEETPICK_URL ?>upload/revolution/slider2.jpg" data-fullwidthcentering="on" alt="slide">
						<!-- THE CAPTIONS IN THIS SLDIE -->
						<div class="caption small_text lft" data-x="center" data-y="230" data-speed="300" data-start="1200" data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine">
							Hot Trends of This Year
						</div>

						<div class="caption lfl" data-x="center" data-y="280" data-speed="400" data-start="1800" data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine">
							<img src="<?php echo SWEETPICK_URL ?>upload/revolution/s-border.png" alt="Image 1">
						</div>

						<div class="caption big_white lfb stt" data-x="center" data-y="350" data-speed="500" data-start="1800" data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine">
							Winter collection
						</div>

						<div class="caption lfb stt" data-x="center" data-y="440" data-speed="640" data-start="2100" data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine">
							<a href="#" class="slider-button">SHOP NOW </a>
						</div>

 
					</li>

					<!-- third SLIDE -->
					<li data-transition="random" data-slotamount="10" data-masterspeed="300">
						<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
						<img src="<?php echo SWEETPICK_URL ?>upload/revolution/slider3.jpg" data-fullwidthcentering="on" alt="slide">
						<!-- THE CAPTIONS IN THIS SLDIE -->
						<div class="caption modern_small_text_dark lft" data-x="710" data-y="230" data-speed="300" data-start="1200" data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine">
							Hot Trends of This Year
						</div>



						<div class="caption big_black lfb stt" data-x="650" data-y="280" data-speed="500" data-start="1800" data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine">
							Summer<br>Trends
						</div>

						<div class="caption lfl" data-x="730" data-y="460" data-speed="400" data-start="1800" data-easing="easeOutExpo" data-end="7200" data-endspeed="300" data-endeasing="easeInSine">
							<img src="<?php echo SWEETPICK_URL ?>upload/revolution/s-border2.png" alt="Image 1">
						</div>

						<div class="caption lfb stt" data-x="745" data-y="500" data-speed="640" data-start="2100" data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine">
							<a href="#" class="slider-button2">SHOP NOW </a>
						</div>


					</li>

				</ul>

			</div>
		</div>
	</div>
	</div>
	<!-- End SLider -->


	<!-- content 
			================================================== -->
	<div id="content">


		<!-- our work portfolio -->
		<div class="arrivals">
			<div class="container">


				<div class="filters">
					<div class="filter clearfix">
						<div class="holder">
								<li><a href="#!"><i class="fa fa-star"></i> Sản phẩm bán chạy</a></li>
							<div class="holder-border"></div>
						</div>
					</div>
					<div class="clear"></div>

					<div class="demo1 clearfix">
							<?php foreach ($listSanPhamBanChay as $sanpham) : ?>
								<div class="col-md-3 grid-item mb30">
									<div class="arrival-overlay">
										<img src="<?php echo IMAGES_URL . $sanpham['anh'] ?>" alt="">
										<?php if (!($sanpham['ma_giam_gia'] == NULL)) : ?>
											<?php $giam_gia = getGiamGiaID($sanpham['ma_giam_gia']); ?>

											<p class="new" style="padding: 4px; background-color: red; color: #fff;">
												<?= $giam_gia['ten_giam_gia']?>
											</p>
										<?php endif ?>
										<div class="arrival-mask">
											<a href="#" class="medium-button button-red add-cart">Thêm vào giỏ hàng</a>
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
										<?php if (!($sanpham['ma_giam_gia'] == NULL)) { ?>
											<?php if($sanpham["so_luong"] == NULL) : ?>
												<?php
													$tienGiamGiaMin = ($giam_gia["giam_gia"]/100)*($tienMin);
													$tienGiamGiaMax = ($giam_gia["giam_gia"]/100)*($tienMax);
												?>
												<p class="high-price">
													<?php echo $tienMax ?> VNĐ
												</p>
												<p class="low-price">
													<?php echo $tienMin - $tienGiamGiaMin ?> VNĐ
												</p>
											<?php else : ?>
												<?php
													$tienGiamGia = $giam_gia["giam_gia"]/100*$sanpham["gia"];
												?>
												<p class="high-price"><?php echo $sanpham["gia"] ?> VNĐ</p>
												<p class="low-price"><?php echo $sanpham["gia"] - $tienGiamGia ?> VNĐ</p>
											<?php endif ?>
										<?php } else { ?>
											<?php if($sanpham["so_luong"] == NULL) : ?>
												<p class="low-price">
													<?php echo $tienMin ?> VNĐ
												</p>
											<?php else : ?>
												<p class="low-price"><?php echo $sanpham["gia"] ?> VNĐ</p>
											<?php endif ?>
										<?php } ?>

										<div class="stars"><img src="<?php echo SWEETPICK_URL ?>upload/stars.png" alt=""></div>
									</div>
								</div>
							<?php endforeach ?>
					</div>
				</div>
				<!-- End Filters -->

			</div>

		</div>
		<!-- end our work portfolio -->

	</div>
	<!-- End content -->
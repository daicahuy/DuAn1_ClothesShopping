<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from max-themes.net/demos/sweetpick/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2024 07:53:54 GMT -->
<head>
<script>

</script>

	<title>SweetPick</title>

	<meta charset="utf-8">

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='<?php echo CLIENT_URL ?>fonts.googleapis.com/css8e21.css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='<?php echo CLIENT_URL ?>fonts.googleapis.com/css1aac.css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
	<link href='<?php echo CLIENT_URL ?>fonts.googleapis.com/css0513.css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='<?php echo CLIENT_URL ?>fonts.googleapis.com/css32b5.css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
	<link href='<?php echo CLIENT_URL ?>fonts.googleapis.com/cssa9a5.css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/bootstrap.css" media="screen">	

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/fullwidth.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/settings.css" media="screen" />

	<link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/responsive.css" media="screen">
	
	<link rel="shortcut icon" href="<?php echo SWEETPICK_URL ?>/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?php echo SWEETPICK_URL ?>/images/favicon.png" type="image/x-icon">

	<!-- Style Switch -->
	
	<link rel="stylesheet" type="text/css" href="<?php echo CLIENT_URL ?>max-themes.net/demos/sweetpick/css/colors/red-black.css" title="red" media="screen" />

</head>
<body>


<!-- Preloader -->
<!-- <div id="preloader">
    <div id="status">&nbsp;</div>
</div> -->

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<div class="top-line">
				<div class="container">
					<div class="left-line">
						<ul class="lang clearfix">
							<li><span>Language: </span> <a href="#">VN <i class="fa fa-angle-down"></i></a>
								<ul class="drop-down2">
									<li><a href="#">ENG</a></li>
								</ul>
							</li>
						</ul>
						<ul class="curr clearfix">
							<li><span>Currency: </span><a href="#">VND <i class="fa fa-angle-down"></i></a>
								<ul class="drop-down2">
									<li><a href="#">USD</a></li>
								</ul>
							</li>
						</ul>

						<div class="mobile-a">
							<a href="#login-box" class="login-window"><i class="fa fa-user"></i></a>
							<a href="#"><i class="fa fa-heart"></i></a>
						</div>
					</div>
					<div class="right-line clearfix">
						<ul>
							<!-- <li><a href="#">Tài khoản của tôi</a></li> -->
							<li><a href="#login-box" class="login-window">Đăng nhập</a></li>
						</ul>
						<div class="mobile-version">
							<div class="cart-icon">
								<a href="#"><img src="<?php echo SWEETPICK_URL ?>/images/cart-white.png" alt="">
								<span>8 Items</span></a>
							</div>
						</div>

				        <div id="login-box" class="login-popup">
				        	<a href="#" class="close"><img src="<?php echo SWEETPICK_URL ?>/images/delete.png" class="btn_close" title="Close Window" alt="Close" /></a>
				         	<form method="post" class="signin" action="#">
				                <fieldset class="textbox">
					                <h4 class="login-title">Đăng nhập </h4>

					                <input placeholder="Email*">				                
					                <input placeholder="Mật khẩu*">
					                

					                <button class="submit button" type="button">Đăng nhập</button>
					                <p>
						                <a class="recover" href="#">Đăng ký</a>
						                <a href="#" class="forgot2">Quên mật khẩu?</a>
					                </p>
					                <div class="clear"></div>
				                </fieldset>
				          </form>
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>
			<!-- end topline -->

			<div class="upper-header">
				<div class="container">

					<div class="search-input">
						<form action="#">
							<input type="text" placeholder="Tìm kiếm...">
							<input type="submit" value="">
						</form>
					</div>

					<div class="logo">
						<a href="?url=/"><img src="<?php echo SWEETPICK_URL ?>/images/logo.png" alt=""></a>
					</div>
					
					<div class="cart">
						<a href="#" class="cartmain">GIỎ HÀNG</a>
						<div class="card-icon">
							<img src="<?php echo SWEETPICK_URL ?>/images/cart.png" alt="">
							<div class="shop-items">0</div>
						</div>
						<div class="hover-cart">

							<div class="hover-box">

								<a href="#"><img src="<?php echo SWEETPICK_URL ?>/images/hover1.png" alt="" class="left-hover"></a>
								<div class="hover-details">
									<p>Váy siêu cấp</p>
									<span>300000 VND</span>
									<div class="quantity">Số lượng: 1</div>
								</div>
								
								<a href="#" class="right-hover"><img src="<?php echo SWEETPICK_URL ?>/images/delete.png" alt=""></a>

								<div class="clear"></div>

							</div>

							<div class="subtotal">
								Tổng tiền: <span>300000 VND</span>
							</div>

							<button class="viewcard"> Xem giỏ hàng</button>
						</div>
					</div>

					<div class="clear"></div>

				</div>
				<!-- End container -->	
			</div>
			<!-- End Upper-header -->	
			
			<div class="nav-border"></div>
			<div class="container">
				<!-- Navigation -->
				<nav id="nav">
					<ul id="navlist" class="sf-menu clearfix">
						<li class="current" ><a href="?url=/">Trang chủ</a></li>
						<li  > <a href="?url=nam&ma_loai=1">Nam</a></li>
						<li> <a href="?url=nu&ma_loai=2">Nữ</a></li>
						<!-- <li><a href="#">Blog</a>
							<ul class="sub-menu">
								<li><a href="blog.html"><span>--</span>Blog</a></li>
								<li><a href="blog-single.html"><span>--</span>Blog Single</a></li>
							</ul>
						</li> -->
					</ul>
				</nav>
		    	<!-- Navigation -->
			</div>
		

		</header>
		<!-- End Header -->
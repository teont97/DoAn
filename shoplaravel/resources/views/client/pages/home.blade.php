<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{!! url('public/client/images/icons/favicon.png') !!}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/bootstrap/css/bootstrap.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/fonts/iconic/css/material-design-iconic-font.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/fonts/linearicons-v1.0.0/icon-font.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/animate/animate.css') !!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/css-hamburgers/hamburgers.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/animsition/css/animsition.min.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/select2/select2.min.css') !!}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/daterangepicker/daterangepicker.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/slick/slick.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/MagnificPopup/magnific-popup.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/vendor/perfect-scrollbar/perfect-scrollbar.css') !!}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/css/util.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! url('public/client/css/main.css') !!}">
<!--===============================================================================================-->
	
</head>
<body>
	@include('client.pages.login')
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						MIỄN PHÍ GIAO HÀNG ĐỐI VỚI HÓA ĐƠN TRÊN 1 TRIỆU 
					</div>
					
					<div class="right-top-bar flex-w h-full">
						@if(!isset($user))
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Đăng Ký
						</a>
			<button type="button" class="flex-c-m trans-04 p-lr-25" data-toggle="modal" data-target="#exampleModalCenter" style="color: #b2b2b2; border-right: 1px solid #b2b2b2;font-family: Poppins-Regular;
    font-size: 12px;
    line-height: 1.8;
    height: 100%;
    ">
                     <label>    Đăng Nhập <label></label>
                         </button>
                         @else
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							{!! $user->name !!}
						</a>

						<a href="{!!  route('logoutUser') !!}" class="flex-c-m trans-04 p-lr-25">
							Đăng Xuất
						</a>
						@endif
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="{!! url('public/client/images/icons/logo-01.png') !!}" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li class="active-menu">
								<a href="{!!  route('gethome') !!}">Trang Chủ</a>							
							</li>
							<li>
								<a href="products">Sản Phẩm</a>
								<ul class="sub-menu">
									@foreach($product_cate as $iteam)
										<li>
											<a href="{!! URL::route('getcate',$iteam->id) !!}">{!! $iteam->name!!}</a>
										</li>
									@endforeach
								</ul>
							</li>

								<li class="label1" data-label1="hot">
								<a href="{!!  route('cart.show') !!}">Hóa Đơn</a>
							</li>

							<li>
								<a href="{!!  route('blog') !!}">Blog</a>
							</li>

							<li>
								<a href="{!!  route('about') !!}">Giới Thiệu</a>
							</li>

							<li>
								<a href="{!!  route('contact') !!}">Liên Hệ</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
					

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{!! Cart::count()!!}">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="{!! url('public/client/images/icons/logo-01.png') !!}" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.html">Home</a>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Products</a>
					
				</li>

				<li>
					<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.html">Blog</a>
				</li>

				<li>
					<a href="about.html">About</a>
				</li>

				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>

		
	</header>
	@include('client.blocks.cart')
<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(public/client/images/slide-01.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Women Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									NEW SEASON
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="{!! URL::route('getcate',14) !!}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(public/client/images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men New-Season
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="{!! URL::route('getcate',17) !!}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(public/client/images/slide-03.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Men Collection 2018
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									New arrivals
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="{!! URL::route('getcate',17) !!}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{!! url('public/client/images/banner-01.jpg') !!}" alt="IMG-BANNER">

						<a href="{!! URL::route('getcate',14) !!}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Women
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{!! url('public/client/images/banner-02.jpg') !!}" alt="IMG-BANNER">

						<a href="{!! URL::route('getcate',13) !!}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Men
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{!! url('public/client/images/banner-03.jpg') !!}" alt="IMG-BANNER">

						<a href="{!! URL::route('getcate',17) !!}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									New Trend
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Product -->
	<section class="bg0 p-t-23 p-b-140 " style="padding-bottom: 85px;">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5" style="text-align: center;">
					Sản Phẩm Mới 
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1 catalog_type" data-catalog="all" >
						All Products
				</button>
			@foreach($product_cate as $iteam)
		<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 catalog_type" data-catalog="{{$iteam->id}}" >
			{!! $iteam->name !!}
		</button>
			@endforeach
			</div>
				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<form role="search" method="get"  action="{!! route('getsearch') !!}">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15 search" type="text" name="key" placeholder="Search">
					</div>	
				</form>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Sort By
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Default
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Popularity
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Average rating
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Newness
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: Low to High
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Price: High to Low
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Price
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										All
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$0.00 - $50.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$50.00 - $100.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$100.00 - $150.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$150.00 - $200.00
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										$200.00+
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Black
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Blue
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Grey
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Green
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										Red
									</a>
								</li>

								<li class="p-b-6">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<a href="#" class="filter-link stext-106 trans-04">
										White
									</a>
								</li>
							</ul>
						</div>

						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<style type="text/css">
				.isotope{
					height: 100%;
				}
			</style>
			<div class="row isotope" id="list">
				@foreach($product as $iteam)
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">			
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img style="width: 270px; height: 334px; border:1px solid #ccc;" src="{!! asset('resources/views/admin/UploadImages/'.$iteam->images) !!} " alt="IMG-PRODUCT">

							<a href="{!! URL::route('detail',$iteam->id) !!}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 "  >
								Xem Chi Tiết
							</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{!! $iteam->name !!}
								</a>

								<span class="stext-105 cl3">
									{!!number_format($iteam->unit_price,0,",",".") !!} VNĐ
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
									<img class="icon-heart1 dis-block trans-04" src="{!! url('public/client/images/icons/icon-heart-01.png') !!}" alt="ICON">
									<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{!! url('public/client/images/icons/icon-heart-02.png') !!}" alt="ICON">
								</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

<div class="blog" style="height: auto;">
	<div class="p-b-10" style="padding: 40px 0px 40px 0px;">
			<h3 class="ltext-103 cl5" id="text" style="text-align: center; ">
			BÀI VIẾT MỚI
			</h3>
			<img  id="img1" src="{!! url('public/client/images/borderbot.png') !!}">
	</div>

	<ul style="height: auto;" >
		@foreach($blog as $iteam_blog)
		<li class="float_left"  >
				<div class="p-b-63">
							<a href="{!!  route('blog_detail',$iteam_blog->id) !!}" class="hov-img0 how-pos5-parent">
					<img src="{!! asset('resources/views/admin/UploadImages/'.$iteam_blog->images) !!}" alt="IMG-BLOG" style="height: 200px;">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										{!! \Carbon\Carbon::parse($iteam_blog->created_at)->format('d'); !!}
									</span>

									<span class="stext-109 cl3 txt-center">
										{!! \Carbon\Carbon::parse($iteam_blog->created_at)->format('F Y'); !!}
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h6 class="p-b-15">
									<a href="{!!  route('blog_detail',$iteam_blog->id) !!}" class="ltext-108 cl2 hov-cl1 trans-04 title">
										{!! $iteam_blog->title  !!}
									</a>
								</h6>

								<p class="stext-117 cl6 abbreviate">

									{!! $iteam_blog->abbreviate !!}
								</p>

								<div class="flex-w flex-sb-m p-t-18" style="padding: 0px;">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10" style="margin: 0px; padding: 0px;">
										<span>
											<span class="cl4">By</span> Admin  
											
										</span>
								<a href="{!!  route('blog_detail',$iteam_blog->id) !!} "class="stext-101 cl2 hov-cl1 trans-04 m-tb-10" id="reading">
										Continue Reading
										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
									</span>

									
								</div>
							</div>
				</div>
		</li>
		@endforeach
	</ul>
	</div>
</div>
</section>
	<style type="text/css">
	.title{
		overflow: hidden;
	text-overflow: ellipsis;
	line-height: 25px;
    -webkit-line-clamp: 2;
    height: 50px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
	}
	.abbreviate{
	overflow: hidden;
	text-overflow: ellipsis;
	line-height: 25px;
    -webkit-line-clamp: 4;
    height: 100px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
		}
		.blog ul {
			width: 100%;
			height: auto;
			overflow: hidden;
		}	
		.blog ul .float_left {
			width: 367px;
			height: 450px;
			border: 1px solid #ccc;
			margin-top: 10px;
			float: left;
		}
		.p-b-63{
			padding-bottom: 10px;
		}
		#reading{
			padding-left: 105px;
		}
		.float_left{
		
			margin: 0px 10px 0px 10px;
		}
		#img1{
			width: 1170px;
			
		}
		.p-t-32{
			padding-left: 15px;
			padding-top: 15px;
		

		}
		.p-t-18{
			padding-top: 0px;
		}
		.ltext-108{
			font-size: 20px;
		}

		.twitter-typeahead{
		width: 100%;
	}
	.list-group-item {
		color: black;
	}
	</style>

	@include('client.blocks.footer')
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{!! url('public/client/images/icons/icon-close.png') !!}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="{!! url('public/client/images/product-detail-01.jpg') !!}">
										<div class="wrap-pic-w pos-relative">
											<img src="{!! url('public/client/images/product-detail-01.jpg') !!}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg') !!}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{!! url('public/client/images/product-detail-02.jpg') !!}">
										<div class="wrap-pic-w pos-relative">
											<img src="{!! url('public/client/images/product-detail-02.jpg') !!}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{!! url('public/client/images/product-detail-02.jpg') !!}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{!! url('public/client/images/product-detail-03.jpg') !!}">
										<div class="wrap-pic-w pos-relative">
											<img src="{!! url('public/client/images/product-detail-03.jpg') !!}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{!! url('public/client/images/product-detail-03.jpg') !!}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<script src="{!! url('public/client/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/animsition/js/animsition.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/bootstrap/js/popper.js') !!}"></script>
	<script src="{!! url('public/client/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/select2/select2.min.js') !!}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/daterangepicker/moment.min.js') !!}"></script>
	<script src="{!! url('public/client/vendor/daterangepicker/daterangepicker.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/slick/slick.min.js') !!}"></script>
	<script src="{!! url('public/client/js/slick-custom.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/parallax100/parallax100.js') !!}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/MagnificPopup/jquery.magnific-popup.min.js') !!}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>

	
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/isotope/isotope.pkgd.min.js') !!}"></script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/sweetalert/sweetalert.min.js') !!}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="{!! url('public/client/vendor/perfect-scrollbar/perfect-scrollbar.min.js') !!}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".catalog_type").click(function(){
			// var id = {!! $iteam->id !!};
			// alert(id);
			var id = $(this).attr('data-catalog');
			$.get("../shoplaravel/loadtype/"+id,function(data){
    			//console.log(data);
    			$("#list").html(data);
    		});
		});
	});
	</script>
	
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
	<script src="{!! url('public/client/js/main.js') !!}"></script>
	<script src="{!! url('public/js/custom.js') !!}" ></script>
</body>
</html>
	
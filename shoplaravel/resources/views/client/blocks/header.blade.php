<!-- Header -->
	<header class="header-v4">
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
<button type="button" class="flex-c-m trans-04 p-lr-25" data-toggle="modal" data-target="#exampleModalCenter"  style="color: #b2b2b2; border-right: 1px solid #b2b2b2;font-family: Poppins-Regular;
    font-size: 12px;
    line-height: 1.8;
    height: 100%;
    ">
    <style type="text/css">
    	button label:hover {
    		color: #717fe0;
    	}
    </style>
                        <label> Đăng Nhập </label>
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

			<div class="wrap-menu-desktop how-shadow1">
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
							<li >
							<a href="{!!  route('Products') !!}">Sản Phẩm</a>
						<ul class="sub-menu">
						@foreach($cate as $iteam)
						<li><a href="{!! URL::route('getcate',$iteam->id) !!}">{!! $iteam->name!!}</a></li>
						@endforeach
					</ul>
						
							</li>

							<li class="label1" data-label1="hot">
								<a href="{!!  route('cart.show') !!}">Hóa Đơn</a>
							</li>

							<li>
								<a href="{!!  route('blog') !!}">Tin tức</a>
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

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
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
					<a href="dsadsa">Home</a>
					<ul class="sub-menu-m">
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.html">Shop</a>
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
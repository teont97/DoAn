@extends('client.master')
@section('content')
	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('public/client/images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						@foreach($data_blog as $iteam)
						<!-- item blog -->
						<div class="p-b-63">
							<a href="{!!  route('blog_detail',$iteam->id) !!}" class="hov-img0 how-pos5-parent">
								<img src="{!! asset('resources/views/admin/UploadImages/'.$iteam->images) !!}" alt="IMG-BLOG" style="width: 825px; height: 413px;">

								<div class="flex-col-c-m size-123 bg9 how-pos5">
									<span class="ltext-107 cl2 txt-center">
										{!! \Carbon\Carbon::parse($iteam->created_at)->format('d'); !!}
									</span>

									<span class="stext-109 cl3 txt-center">
										{!! \Carbon\Carbon::parse($iteam->created_at)->format('F Y'); !!}
									</span>
								</div>
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
						<a href="{!!  route('blog_detail',$iteam->id) !!}" class="ltext-108 cl2 hov-cl1 trans-04">
										{!!$iteam->title!!}
									</a>
								</h4>

								<p class="stext-117 cl6">
									{!!$iteam->abbreviate!!}
								</p>

								<div class="flex-w flex-sb-m p-t-18">
									<span class="flex-w flex-m stext-111 cl2 p-r-30 m-tb-10">
										<span>
											<span class="cl4">By</span> Admin  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											StreetStyle, Fashion, Couple  
											<span class="cl12 m-l-4 m-r-6">|</span>
										</span>

										<span>
											8 Comments
										</span>
									</span>

								<a href="{!!  route('blog_detail',$iteam->id) !!}" class="stext-101 cl2 hov-cl1 trans-04 m-tb-10">
										Continue Reading

										<i class="fa fa-long-arrow-right m-l-9"></i>
									</a>
								</div>
							</div>
						</div>
						@endforeach
						<!-- Pagination -->
						<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
							{!!$data_blog->links()!!}
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<form role="search" method="get" action="{!! route('getSearchBlog') !!}">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55 search1" type="text" name="key" placeholder="Search">
							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>
					</div>
				</form>
						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Categories
							</h4>

							<ul>
								@foreach($categories as $cate)
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										{!!$cate->name!!}
									</a>
								</li>
								@endforeach
								
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Featured Products
							</h4>

							<ul>
							@foreach($data_products as $iteam_rand)
								<li class="flex-w flex-t p-b-30">
									<a href="{!! URL::route('detail',$iteam_rand->id) !!}" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
									<img src="{!! asset('resources/views/admin/UploadImages/'.$iteam_rand->images) !!}" alt="PRODUCT" style="width: 90px; height: 110px;">
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="{!! URL::route('detail',$iteam_rand->id) !!}" class="stext-116 cl8 hov-cl1 trans-04">
											{!!$iteam_rand->name!!}
										</a>

										<span class="stext-116 cl6 p-t-20">
											{!!$iteam_rand->unit_price!!} VNĐ
										</span>
									</div>
								</li>
							@endforeach
								
							</ul>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Archive
							</h4>

							<ul>
								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											July 2018
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											June 2018
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											May 2018
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											April  2018
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											March 2018
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											February 2018
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											January 2018
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								<li class="p-b-7">
									<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
										<span>
											December 2017
										</span>

										<span>
											(26)
										</span>
									</a>
								</li>
							</ul>
						</div>

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
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
		</div>
	</section>	
	
@endsection
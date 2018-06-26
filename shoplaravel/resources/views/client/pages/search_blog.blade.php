@extends('client.master')
@section('content')
<style type="text/css">
	h3{
		color: black;
		text-align: left;
		padding-bottom: 10px;
		margin-top: 0px;

	}
</style>
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
					<?php  $data= count($result_news)   ?>
					<h3>Kết Quả Tìm Kiếm </h3>
					@if($data>0)
					<div class="p-r-45 p-r-0-lg">
						@foreach($result_news as $iteam)
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
					</div>
					@else
						<span>Không Có kết quả</span>
					@endif
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					

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

					</div>
				</div>
			</div>
		</div>
	</section>	
	
@endsection
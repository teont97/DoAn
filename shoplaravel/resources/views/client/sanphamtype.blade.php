
@if($type=='all') 	
	@foreach($datall as $iteam)
<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img style="width: 270px; height: 334px; border:1px solid #ccc;" src="{!! asset('resources/views/admin/UploadImages/'.$iteam->images) !!}"" alt="IMG-PRODUCT">

							<a href="{!! URL::route('detail',$iteam->id) !!}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 " >
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
@else
@foreach($data as $iteam)
<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img style="width: 270px; height: 334px; border:1px solid #ccc;" src="{!! asset('resources/views/admin/UploadImages/'.$iteam->images) !!}"" alt="IMG-PRODUCT">

							<a href="{!! URL::route('detail',$iteam->id) !!}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 " >
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
	

@endif

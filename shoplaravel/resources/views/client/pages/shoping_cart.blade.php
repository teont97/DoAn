@extends('client.master')
@section('content')
<style type="text/css">
	.table-shopping-cart .column-4{
		text-align: center;
	}
	.how-itemcart1 img{
		height: 80px;
	}
	.table-shopping-cart .table_row{
		height: 150px;
	}
	.how-itemcart1{
		margin-top: 33px;
	}
</style>
<script type="text/javascript">
	function UpdateCart(qty,rowId){
			$.get(
				'{!! URL::route('cart.update') !!}',
				{qty:qty,rowId:rowId},
				function(){
						location.reload();
				}
				);
	}
	function UpdateCart1(qty,rowId){
		var slm=parseInt(qty)+1;
	
		$.get(
				'{!! URL::route('cart.update') !!}',
				{qty:slm,rowId:rowId},
				function(){
						location.reload();
				}
				);
		}
 	function UpdateCart2(qty,rowId){
		var slm=parseInt(qty)-1;
		$.get(
				'{!! URL::route('cart.update') !!}',
				{qty:slm,rowId:rowId},
				function(){
						location.reload();
				}
				);
	
	}
</script>
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Trang Chủ
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Giỏ Hàng
			</span>
		</div>
	</div>

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" action="{!! route('cart.checkout')!!}"  method="post">
		<input  type="hidden" name="_token" value="{!!csrf_token() !!}">
@if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!}" style="width: 1125px; margin: 0 auto; padding-bottom: 10px;margin-bottom: 20px;">
                            {!! Session::get('flash_messages') !!}
                        </div>
                        @endif
		<div class="container">
		
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1"style="text-align: center;">Sản Phẩm</th>
									<th class="column-2" style="text-align: center;">Tên</th>
									<th class="column-3">Giá Tiền</th>
									<th class="column-4">Số Lượng</th>
									<th class="column-5">Xóa</th>
								</tr>
								@foreach($data_iteam as $iteam)
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{!! asset('resources/views/admin/UploadImages/'.$iteam->options->img) !!}" alt="IMG">
										</div>
									</td>
									<td class="column2" style="text-align: center;">
										{!! $iteam->name !!}</td>
									<td class="column3">{!! $iteam->price !!}</td>
									<td class="column4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m"
											onclick="UpdateCart2('{!! $iteam->qty!!}','{!!$iteam->rowId!!}')"
											>
												<i class="fs-16 zmdi zmdi-minus"  ></i>
											</div>

							<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{!! $iteam->qty!!}" onchange="UpdateCart(this.value,'{!!$iteam->rowId!!}')">

<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"onclick="UpdateCart1('{!! $iteam->qty!!}','{!!$iteam->rowId!!}')">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
							<td class="column-5" style="padding-right: 33px;"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('cart.delete',$iteam->rowId) !!}" style="color:#413f3f;"> Delete</a></td>
								</tr>
								@endforeach
								
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Mã Giám Giá">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Xác Nhận 
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Cập Nhật 
							</div>
						</div>
					</div>
				</div>
				<form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Thông Tin Giao Hàng

						</h4>
						 @if (count($errors) > 0 )
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{!!$error!!}</li>
            @endforeach
        </ul>
        
    </div>
@endif
						<div class="form-group" >
                                <label>Email</label>
                                <input class="form-control" name="txtEmail" placeholder="Vui Lòng Nhập Vào Email" />
                            </div>
                            <div class="form-group" >
                                <label>Họ Tên</label>
                                <input class="form-control" name="txtName" placeholder="Vui Lòng Nhập Vào Họ Tên" />
                            </div>
                            <div class="form-group" >
                                <label>Số Điện Thoại</label>
                                <input class="form-control" name="txtPhone" placeholder="Vui Lòng Nhập Vào SĐT" />
                            </div>
                            <div class="form-group" >
                                <label>Địa Chỉ Nhận Hàng</label>
                                <input class="form-control" name="txtAddress" placeholder="Vui Lòng Nhập Vào Địa Chỉ" />
                            </div>
                            <div class="p-t-15">
									
									
									</div>
								<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Tổng Tiền:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									{!!$data_total!!} VNĐ
								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" type="submit">
							Tiến Hành Thanh Toán
						</button>			
								</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</form>
		
	
@endsection
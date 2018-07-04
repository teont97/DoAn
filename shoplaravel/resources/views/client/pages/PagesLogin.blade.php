<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
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
<style type="text/css">
	body{
		color: #fff;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before, .signup-form h2:after{
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}	
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        border-top:1px solid #ccc;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
        background: #717fe0;
        border: none;
        border-radius: 23px;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #717fe0;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
</style>
</head>
<body>
	@include('client.pages.login')
 @include('client.blocks.header')
 @include('client.blocks.cart')
 <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('public/client/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Đăng Nhập
		</h2>
	</section>	
	@if(Session::has('flash_messages'))
            <div class="alert alert-{!! Session::get('flash_level') !!}" style="width: 50%; margin: 10px auto; text-align: center;">
                            {!! Session::get('flash_messages') !!}
                        </div>
                        @endif
<div class="signup-form">
    <form action="{!! route('post.login') !!}" method="post">
    	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<h2>Đăng Nhập</h2>
		@if(session('mesage'))
		<p class="hint-text">
			{!! session('mesage') !!}
		</p>
		@endif
        
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Tài Khoản" required="required">
        </div>
        <div class="form-group">
        	<input type="password" class="form-control" name="password" placeholder="Mật Khẩu" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Đăng Nhập</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="#">Sign in</a></div>
</div>
@include('client.blocks.footer')
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
<!--===============================================================================================-->
	<script src="{!! url('public/client/js/main.js') !!}"></script>

</body>
</html>                            
<!doctype html>
<html lang="en">

<head>
	<title>{{$title}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		var BASE_URL = "{{url('')}}";
	</script>
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/linearicons-v1.0.0/icon-font.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/slick/slick.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/MagnificPopup/magnific-popup.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="navbar navbar-expand-md navbar-light bg-light">

					<!-- Logo desktop -->
					<a href="{{url('/')}}">
						<h3 style="margin-left:20px;font-size:18pt;font-family:italic;">JEWELRY STOR</h3>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li style="left:70%;">
								<a href="{{url('/')}}">Home</a>
							</li>
							@if(!Session::get('user_id'))
							<li style="left:70%;">
								<a href="{{url('user/login')}}">Login</a>
							</li>
							<li style="left:70%;">
								<a href="{{url('user/signup')}}">SignUp</a>
							</li>
							@else
							<li style="left:70%;">
								<a href="{{url('user/logout')}}">Log Out</a>
							</li>
							@endif
							@if(Session::get('is_admin')==true)
							<li style="left:70%;">
								<a href="{{url('cms/dashbord')}}">CMS</a>
							</li>

							@endif
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{Cart::getTotalQuantity()}}">
							<button class="" onclick="window.location='{{url('shop/ViewCart')}}'">
								<i class="zmdi zmdi-shopping-cart"></i>
							</button>

						</div>
					</div>
				</nav>
			</div>
		</div>
		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m m-r-15">

		</div>
	</header>

	@if(Session::get('sm'))
	<div class="container">
		<div class="alert alert-success text-center sm" role="alert">
			{{Session::get('sm')}}
		</div>
	</div>
	@endif

	@yield('content')

	<!-- Footer -->
	<footer class="container">
		<div class="row">
			<div class="fixed-bottom py-4 bg-light">
				<p class="m-0 text-center" style="font-family:italic;">&copy; Sara Orbi | saradavidov97@gmail.com | 050-3748111</p>
			</div>
		</div>
	</footer>


	<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
	<script src="{{asset('js/slick-custom.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/parallax100/parallax100.js')}}"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/isotope/isotope.pkgd.min.js')}}"></script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e) {
			e.preventDefault();
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>

	<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="{{asset('/mainjs/myjs.js')}}" type="text/javascript"></script>
</body>

</html>
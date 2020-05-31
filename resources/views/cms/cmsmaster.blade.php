<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.6">
	<title>{{$title}}</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style>
		/* * Sidebar */
		.sidebar {
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			z-index: 100;
			/* Behind the navbar */
			padding: 48px 0 0;
			/* Height of navbar */
			box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
		}

		.sidebar-sticky {
			position: relative;
			top: 0;
			height: calc(100vh - 48px);
			padding-top: .5rem;
			overflow-x: hidden;
			overflow-y: auto;
			/* Scrollable contents if viewport is shorter than content. */
		}

		@supports ((position: -webkit-sticky) or (position: sticky)) {
			.sidebar-sticky {
				position: -webkit-sticky;
				position: sticky;
			}
		}

		.sidebar .nav-link {
			font-weight: 500;
			color: #333;
		}

		.sidebar .nav-link .feather {
			margin-right: 4px;
			color: #999;
		}

		.sidebar .nav-link.active {
			color: #007bff;
		}

		.sidebar .nav-link:hover .feather,
		.sidebar .nav-link.active .feather {
			color: inherit;
		}

		.sidebar-heading {
			font-size: .75rem;
			text-transform: uppercase;
		}

		/*
 * Content
 */

		[role="main"] {
			padding-top: 133px;
			/* Space for fixed navbar */
		}

		@media (min-width: 768px) {
			[role="main"] {
				padding-top: 48px;
				/* Space for fixed navbar */
			}
		}

		/*
 * Navbar
 */

		.navbar-brand {
			padding-top: .75rem;
			padding-bottom: .75rem;
			font-size: 1rem;
			background-color: rgba(0, 0, 0, .25);
			box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
		}

		.navbar .form-control {
			padding: .75rem 1rem;
			border-width: 0;
			border-radius: 0;
		}

		.form-control-dark {
			color: #fff;
			background-color: rgba(255, 255, 255, .1);
			border-color: rgba(255, 255, 255, .1);
		}

		.form-control-dark:focus {
			border-color: transparent;
			box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
		}
	</style>

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<!-- <link href="dashboard.css" rel="stylesheet"> -->
</head>

<body>
	<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" style="color: white;font-family:italic;" href="{{url('/')}}">JEWELRY STOR</a>

		<!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->

		<input class="form-control form-control-w-100" type="text" placeholder="Search.." id="dtBasicExample" cellspacing="0">

		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
				<a class="nav-link" href="{{url('user/logout')}}">Sign out</a>

			</li>
		</ul>
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
				<a class="nav-link" href="{{url('/')}}">Back</a>

			</li>
		</ul>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="{{url('cms/dashbord')}}">
								<span data-feather="home"></span>
								Dashboard <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<span data-feather="file"></span>
								Orders
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('cms/products')}}">
								<span data-feather="shopping-cart"></span>
								Products
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('cms/categories')}}">
								<span data-feather="users"></span>
								Categories
							</a>
						</li>
					</ul>
				</div>
			</nav>

			@yield('content')
			@if(Session::get('sm'))
			<div class="container">
				<div class="alert alert-success text-center sm" role="alert">
					{{Session::get('sm')}}
				</div>
			</div>
			@endif
		</div>
	</div>

	<script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="{{asset('/mainjs/myjs.js')}}"></script>
	<script src="{{asset('mainjs/dashbord.js')}}"></script>
	<!-- <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script> -->
	<script>
		$(document).ready(function() {
			$('#dtBasicExample').DataTable();
			$('.dataTables_length').addClass('bs-select');
		});
	</script>

</body>

</html>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="author" content="codepixer">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>Kwiz</title>

	<!--
			Google Font
			============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i" rel="stylesheet">

	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href=""><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active">Home</li>
						<li>About</a></li>
                        <li>Courses</li>
                        @if (Route::has('login'))
                        @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a><li>
                        @endif
                        @endauth
                        @endif
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->


	<!-- Start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-8 col-md-12">
					<h1 class="wow fadeIn" data-wow-duration="4s">Welcome to Kwiz</h1>
					<p class="text-white">
						Aplikasi berbasis web yang akan membantu anda dalam kegiatan kuis
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->


	<!-- Start About Area -->
	<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-5 col-md-6 about-left">
					<img class="img-fluid" src="img/about.jpg" alt="">
				</div>
				<div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
					<h1>
						Over 2500 Courses <br> from 5 Platform
					</h1>
					<div class="wow fadeIn" data-wow-duration="1s">
						<p>
							There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think
							about setting up your own viewing station. In the life of any aspiring astronomer that it is time to buy that first
							telescope. It’s exciting to think about setting up your own viewing station.
						</p>
					</div>
					<a href="courses.html" class="primary-btn">Cari Soal</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->


	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl-carousel-thumb.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
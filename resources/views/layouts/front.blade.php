<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Aurabais - eCommerce</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('front/images/favicon.jpeg') }}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('front/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/niceselect.css') }}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/flex-slider.min.css') }}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('front/css/owl-carousel.css') }}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('front/css/slicknav.min.css') }}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('front/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('front/style.css') }}">
	<link rel="stylesheet" href="{{ asset('front/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +228 70 65 17 05</li>
								<li><i class="ti-email"></i> support@au-rabais.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Lom??-Adidogom?? </li>
								<!-- <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li> -->
								@guest
                                   @if (Route::has('login'))
								    <li><i class="ti-power-off"></i><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
								  @endif

								  @if (Route::has('register'))
								    <li><i class="ti-user"></i> <a href="{{ url('/inscription') }}">{{ __('Register') }}</a></li>
								  @endif

								@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }}
										</a>

										<div class="dropdown-menu dropdown-menu-end show" aria-labelledby="navbarDropdown" id="dro">
											<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
												@csrf
											</form>
										</div>
									</li>
							@endguest
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-1 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="/"><img src="{{ asset('front/images/logo.jpeg') }}" alt="logo" style="margin-top: -12px;margin-left: -37px;" id="aurabais"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-9 col-12">

						<div class="menu-area">
							<!-- Main Menu -->
							<nav class="navbar navbar-expand-lg">
								<div class="navbar-collapse">	
									<div class="nav-inner">	
										<ul class="nav main-menu menu navbar-nav">
												<li><a href="/" style="color:black !important;">Home</a></li>
												<li class="active"><a href="#" style="color:white !important;">Cat??gorie<i class="ti-angle-down"></i><span class="new"></span></a>
													<ul class="dropdown">
													<li><a href="{{ url('/info&tech') }}"style="color:black !important;">Informations & T??chnologies</a></li>
													  <li><a href="{{ url('/Produit-cosmetique') }}"style="color:black !important;">Produit cosm??ttiques</a></li>
													  <li><a href="{{ url('/Sport-Divertissement') }}"style="color:black !important;">Sport & Divertissement</a></li>
													  <li><a href="{{ url('/Hygiene-Sant??') }}"style="color:black !important;">Hygi??ne & sant??</a></li>
													  <li><a href="{{ url('/Autres') }}"style="color:black !important;">Autres</a></li>
													</ul>
												</li>
												<li><a href="{{ url('/Boutique') }}"style="color:black !important;">Boutique</a></li>									
												<li><a href="{{ url('/Contact') }}"style="color:black !important;">Contact</a></li>
												<li> 
													<div class="search-bar-top">
														<div class="search-bar">
															<!-- <select>
																<option selected="selected">All Category</option>
																<option>watch</option>
																<option>mobile</option>
																<option>kid???s item</option>
															</select> -->
															<form class="form-a" action="/search" method="GET" role="search">
                                                                {{ csrf_field() }}
																<input name="q" placeholder="Search Products Here....." type="text">
																<button class="btnn"><i class="ti-search"></i></button>
															</form>
														</div>
													</div>
												</li>
											</ul>
									</div>
								</div>
							</nav>
							<!--/ End Main Menu -->	
						</div>

						
					</div>
					<div class="col-lg-2 col-md-2 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<!-- <div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div> -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="{{ route('cart.list') }}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{ Cart::getTotalQuantity()}}</span></a>
								<!-- Shopping Item -->
								<!-- <div class="shopping-item">
									<div class="dropdown-cart-header">
										<span> </span>
										<a href="#">View Cart</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.html" class="btn animate">Checkout</a>
									</div>
								</div> -->
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<!-- <div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-9 col-12">
							<div class="menu-area"> -->
								<!-- Main Menu -->
								<!-- <nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Boutique<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="shop-grid.html">T??l??phones</a></li>
															<li><a href="cart.html">Ordinateurs</a></li>
															<li><a href="checkout.html">Imprimantes</a></li>
															<li><a href="checkout.html">Accessoires</a></li>
														</ul>
													</li>
													<li><a href="#">Blog</a></li>									
													<li><a href="contact.html">Contact</a></li>
												</ul>
										</div>
									</div>
								</nav> -->
								<!--/ End Main Menu -->	
							<!-- </div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
 
     @yield('content')

	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="{{url('/')}}"><img src="images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Vous avez une question??? Appelez-nous 24h/24 et 7j/7<span><a href="tel:+22870651705">+228 70 65 17 05</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Informations</h4>
							<ul>
								<li><a href="#">Apropos</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Aide</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Service Clients</h4>
							<ul>
								<li><a href="#">m??thodes de payement</a></li>
								<li><a href="#">Remboursement</a></li>
								<li><a href="#">Retour</a></li>
								<li><a href="#">Exp??dition</a></li>
								<li><a href="#">Politique de confidentialit??</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Entrez en contact</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>Afrique-Togo</li>
									<li>Lom??-Adidogom??.</li>
									<li>support@au-rabais.com</li>
									<li>+228 70 65 17 05</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="https://www.facebook.com/Au-Rabais-113151708051033/?modal=focused_switcher_dialog"><i class="ti-facebook"></i></a></li>
								<li><a href="https://www.linkedin.com/company/91591391"><i class="ti-linkedin"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCAgFAORsHn4CPLerGm6iYhg"><i class="ti-youtube"></i></a></li>
								<li><a href="https://www.instagram.com/aurabais22/"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright ?? 2020 <a href="#" target="_blank">it-innovation</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('front/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
	<!-- Color JS -->
	<script src="{{ asset('front/js/colors.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('front/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('front/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('front/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('front/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('front/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('front/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('front/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('front/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('front/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('front/js/easing.js') }}"></script>
	<!-- Active JS -->
	<script src="{{ asset('front/js/active.js') }}"></script>
</body>
</html>
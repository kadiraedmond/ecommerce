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
												<li class="active"><a href="#">Home</a></li>
												<li><a href="#" style="color:black !important;">Cat??gorie<i class="ti-angle-down"></i></a>
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
		 
	</header>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		@foreach ($slider as $object)
		<div class="single-slider" style="background-image: url('{{ asset('uploads/promo/'.$object->picture) }}');">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">

										<h1><span>UP TO 50% OFF </span>
										
											{{ $object->titre }}
										</h1>
										<p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Collections Technologique</p>
							<h3>Informatique <br> collection</h3>
							<a href="{{ url('/info&tech') }}">voir plus</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Collections Cosmetiques</p>
							<h3>Collections <br> 2022</h3>
							<a href="{{ url('/Produit-cosmetique') }}">Voir plus</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Collection Sportive</p>
							<h3>Haute Game<br> Up to <span>40%</span> Off</h3>
							<a href="{{ url('/Sport-Divertissement') }}">Voir plus</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product electronique -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Informatique & Technologies</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#ordinateur" role="tab">Ordinateurs</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#telephone" role="tab">T??l??phones</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#imprimantes" role="tab">Imprimantes</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessoires</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#logiciel" role="tab">Logiciel</a></li>
									<!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li> -->
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="ordinateur" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($ordinateur as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> -->
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="telephone" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($telephone as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA{{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="imprimantes" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($imprimante as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="/detail/{{$prod-> id}}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
																<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
																
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="/detail/{{$prod-> id}}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($accessoires as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="logiciel" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($logiciel as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product electronique -->

	<!-- Start Product Modde -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Produits Cosmetiques</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Homme</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Femme</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Enfant</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">B??b??</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Parfun" role="tab">Parfun</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#beaute" role="tab">Beaut??</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($homme as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> -->
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="women" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($femme as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="kids" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($enfant as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="/detail/{{$prod-> id}}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
																<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
																
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="/detail/{{$prod-> id}}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>FCA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($accessoires as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="parfun" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($parfun as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="beaute" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($beaut?? as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> -->
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Mode Area -->

	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Sport & Divertissements</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#jeux" role="tab">Jeux</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#jouet" role="tab">Jouet</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bricolages" role="tab">Bricolages</a></li>
									 
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="jeux" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($jeux as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span> CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="jouet" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($jouet as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="bricoloages" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($bricolages as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="/detail/{{$prod-> id}}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
																<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
																
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="/detail/{{$prod-> id}}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								 
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Collections des Meubles</p>
							<h3>Bois Rouge <br>Promo<span> 50%</span></h3>
							<a href="{{url('/Autres')}}">Voir Boutique</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="https://via.placeholder.com/600x370" alt="#">
						<div class="content">
							<p>Toshiba collection</p>
							<h3>7th Gen??ration <br> Promo <span>70%</span></h3>
							<a href="{{url('/info&tech')}}" class="btn">Voir Boutique</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->

	<!-- Start Product autres Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Autres</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#cadeaux" role="tab">Cadeaux</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#artisanat" role="tab">Artisanat</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessores" role="tab">Accessoires</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#animal" role="tab">Animalerie</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#lumiere" role="tab">luminaire</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#agriculture" role="tab">Agriculture</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fourniture" role="tab">Fourniture de bureax</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#meuble" role="tab">Meubles</a></li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#decoration" role="tab">Decoration</a></li>
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="artisanat" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($artisanat as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> -->
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span> CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="accessoires" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($accessoires as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
											 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="animal" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($animalerie as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="/detail/{{$prod-> id}}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> -->
																<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
																<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
																
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="/detail/{{$prod-> id}}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										 @endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="lumiere" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($luminaire as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="agriculture" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($agriculture as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="fourniture" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($bureaux as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="meuble" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($meuble as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="decoration" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($decoration as $prod)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="{{ url('/detail/'.$prod->id) }}">
															<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
															<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
															</div>
															<div class="product-action-2">
															   <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<input type="hidden" value="{{ $prod->id }}" name="id">
																	<input type="hidden" value="{{ $prod->nom }}" name="nom">
																	<input type="hidden" value="{{ $prod->prix }}" name="prix">
																	<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
																	<input type="hidden" value="{{ $prod->description }}" name="description">
																	<input type="hidden" value="{{ $prod->info }}" name="info">
																	<input type="hidden" value="{{ $prod->images }}"  name="images">
																	<input type="hidden" value="{{ $prod->picture }}"  name="picture">
																	<input type="hidden" value="1" name="quantity">
																	<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
																</form>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="{{ url('/detail/'.$prod->id) }}">{{ $prod->nom }}</a></h3>
														<div class="product-price">
															<span>CFA  {{ $prod->prix }}</span>
														</div>
													</div>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product autres Area -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hygiene & sant??</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						@foreach($hygiene as $prod)
						<div class="single-product">
							<div class="product-img">
								<a href="/detail/{{$prod-> id}}">
									<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
									<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<!-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a> -->
										<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
									</div>
									<div class="product-action-2">
									  <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
										    @csrf
											<input type="hidden" value="{{ $prod->id }}" name="id">
											<input type="hidden" value="{{ $prod->nom }}" name="nom">
									     	<input type="hidden" value="{{ $prod->prix }}" name="prix">
											<input type="hidden" value="{{ $prod->categorie }}" name="categorie">
											<input type="hidden" value="{{ $prod->description }}" name="description">
											<input type="hidden" value="{{ $prod->info }}" name="info">
											<input type="hidden" value="{{ $prod->images }}"  name="images">
											<input type="hidden" value="{{ $prod->picture }}"  name="picture">
											<input type="hidden" value="1" name="quantity">
											<button class="px-4 py-2 text-white bg-blue-800 rounded" style="background-color: #eb5b27; border: none;">Add To Cart</button>
									  </form>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="/detail/{{$prod-> id}}">{{ $prod->nom }}</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>Fcfa{{ $prod->prix }}</span>
								</div>
							</div>
						</div>
						@endforeach
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Produits XXL</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($best as $prod)
					<div class="single-list">
						<div class="row">
						
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="#">{{$prod->nom}}</a></h4>
									<p class="price with-discount">Fcfa{{$prod->prix}}</p>
								</div>
							</div>
						
						</div>
					</div>
					@endforeach
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Produits Recents</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($ancien as $prod)
					<div class="single-list">
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">{{$prod->nom}}</a></h5>
									<p class="price with-discount">Fcfa {{$prod->prix}}</p>
								</div>
							</div>

						</div>
					</div>
					@endforeach
					<!-- End Single List  -->
					 
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Nouveau Produits</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($view as $prod)
					<div class="single-list">
						<div class="row">
							
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">{{$prod->nom}}</a></h5>
									<p class="price with-discount">Fcfa {{$prod->prix}}</p>
								</div>
							</div>

						</div>
					</div>
					@endforeach
					<!-- End Single List  -->
					 
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
	
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="https://via.placeholder.com/750x590" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">Beatutyful dress for women</h3>
								<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
								<h1 class="price">$1200 <s>$1890</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Notre Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($blog as $prod)
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{ asset('uploads/blog/'.$prod->picture) }}" alt="#" style="height: 292px !important;">
						<div class="content">
							<p class="date">22 July , 2020. Monday</p>
							<a href="blog/detail/{{$prod-> id}}" class="title"> {{$prod->titre}}</a>
							<a href="blog/detail/{{$prod-> id}}" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Shop Newsletter  -->
	<!-- <section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12"> -->
						<!-- Start Newsletter Inner -->
						<!-- <div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="email" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div> -->
						<!-- End Newsletter Inner -->
					<!-- </div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Shop Newsletter -->
	
	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
											<div class="single-slider">
												<img src="https://via.placeholder.com/569x528" alt="#">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>Flared Shift Dress</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (1 customer review)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i> in stock</span>
                                        </div>
                                    </div>
                                    <h3>$29.00</h3>
                                    <div class="quickview-peragraph">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Color</h5>
												<select>
													<option selected="selected">orange</option>
													<option>purple</option>
													<option>black</option>
													<option>pink</option>
												</select>
											</div>
										</div>
									</div>
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<a href="#" class="btn">Add to cart</a>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
	
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
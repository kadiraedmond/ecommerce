@extends('layouts.front')
@section('content')
	
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
  
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Entrer en contact</h4>
									<h3>Écrivez-nous un message</h3>
								</div>
								<form class="form" method="post" action="mail/mail.php">
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre nom<span>*</span></label>
												<input name="name" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Vos sujets<span>*</span></label>
												<input name="subject" type="text" placeholder="">
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Votre e-mail<span>*</span></label>
												<input name="email" type="email" placeholder="">
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Ton numero téléphone<span>*</span></label>
												<input name="company_name" type="text" placeholder="">
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label> Message<span>*</span></label>
												<textarea name="message" placeholder=""></textarea>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Envoyer le message</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Appelez-nous maintenant:</h4>
									<ul>
										<li>+228 70 65 17 05</li>
										 
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></li>
										<li><a href="mailto:support@aurabais.com">support@au-rabais.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Notre adresse:</h4>
									<ul>
										<li>Afrique, Togo, Lomè-Adidogomé</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->
	
	<!-- Map Section -->
	 <!-- map -->
	 <div class="container-fluid">
    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
      <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
      <script>(function () {
          var setting = { "height": 400, "width": 1920, "zoom": 17, "queryString": "Totsivi, Lomé, Togo", "place_id": "ChIJiei8z_lYIRARJzmj129sLw8", "satellite": false, "centerCoord": [6.191316416680699, 1.192086019919003], "cid": "0xf2f6c6fd7a33927", "lang": "fr", "cityUrl": "/togo/lome-16827", "cityAnchorText": "Carte de Lomé, Golfe (incl Lome), Togo", "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "822146" };
          var d = document;
          var s = d.createElement('script');
          s.src = 'https://1map.com/js/script-for-user.js?embed_id=822146';
          s.async = true;
          s.onload = function (e) {
            window.OneMap.initMap(setting)
          };
          var to = d.getElementsByTagName('script')[0];
          to.parentNode.insertBefore(s, to);
        })();</script><a href="https://1map.com/fr/map-embed">1 Map</a>
    </div>

  </div>
	<!--/ End Map Section -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->


@endsection
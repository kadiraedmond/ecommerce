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
							<li class="active"><a href="blog-single.html">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	 <!-- Shop Detail Start -->
     <div class="container-fluid pb-5" style="background-color: #f6f7fb;">
        <div class="row px-xl-5" style="background-color: #f6f7fb;">
            <div class="col-lg-5 mb-30" style="background-color: white;">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{ asset('uploads/produit/'.$produit->picture) }}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{ asset('uploads/produit/'.$produit->images) }}" alt="Image">
                        </div>
                        <!-- <div class="carousel-item">
                            <img class="w-100 h-100" src="img/product-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="img/product-4.jpg" alt="Image">
                        </div> -->
                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30" style="background-color:#f6f7fb !important;">
                <div class="h-100 bg-light p-30" style="background-color: White !important;">
                    <h3 style="margin-left: 24px; margin-bottom: 20px;
                    padding-top: 20px;">{{$produit->nom}}</h3>
                    <h3 class="font-weight-semi-bold mb-4" style="margin-left: 24px;">Fcfa {{$produit->prix}}</h3>
                    <p class="mb-4" style="margin-left: 24px;">Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit
                        clita ea. Sanc ipsum et, labore clita lorem magna duo dolor no sea
                        Nonumy</p>
                    <!-- <div class="d-flex mb-3" style="margin-left: 24px;">
                        <strong class="text-dark mr-3">Sizes:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-1" name="size">
                                <label class="custom-control-label" for="size-1">XS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-2" name="size">
                                <label class="custom-control-label" for="size-2">S</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-3" name="size">
                                <label class="custom-control-label" for="size-3">M</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-4" name="size">
                                <label class="custom-control-label" for="size-4">L</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="size-5" name="size">
                                <label class="custom-control-label" for="size-5">XL</label>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex mb-4" style="margin-left: 24px;">
                        <strong class="text-dark mr-3">Colors:</strong>
                        <form>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-1" name="color">
                                <label class="custom-control-label" for="color-1">Black</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-2" name="color">
                                <label class="custom-control-label" for="color-2">White</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-3" name="color">
                                <label class="custom-control-label" for="color-3">Red</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-4" name="color">
                                <label class="custom-control-label" for="color-4">Blue</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="color-5" name="color">
                                <label class="custom-control-label" for="color-5">Green</label>
                            </div>
                        </form>
                    </div> -->
                    <div class="d-flex align-items-center mb-4 pt-2" style="margin-left: 24px;">
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="hidden" value="{{ $produit->id }}" name="id">
							<input type="hidden" value="{{ $produit->nom }}" name="nom">
							<input type="hidden" value="{{ $produit->prix }}" name="prix">
							<input type="hidden" value="{{ $produit->categorie }}" name="categorie">
							<input type="hidden" value="{{ $produit->description }}" name="description">
							<input type="hidden" value="{{ $produit->info }}" name="info">
							<input type="hidden" value="{{ $produit->images }}"  name="images">
							<input type="hidden" value="{{ $produit->picture }}"  name="picture">
							<input type="hidden" value="1" name="quantity">
							<button class="btn btn-primary px-3" style="border:none !important;"><i class="fa fa-shopping-cart mr-1" ></i> Add To
                            Cart</button>
					</form>                    

                    </div>
                    <div class="d-flex pt-2"style="margin-left: 24px; margin-bottom: 20px;
                    padding-top: 20px;">
                        <strong class="text-dark mr-2">Share on:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fa fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col" style="padding-top: 40px; ">
                <div class="bg-light p-30">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1">Description</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-2">Information</a>
                        <a class="nav-item nav-link text-dark" data-toggle="tab" href="#tab-pane-3">Contactez</a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <h4 class="mb-3">Product Description</h4>
                            <p>{{$produit->description}}.</p>
                             
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-3">Additional Information</h4>
                            <p>{{$produit->info}}.</p>
                            
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">Administrateur Au-Rabais</h4>
                                    <div class="media mb-4">
                                        <img src="{{asset('front/img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>Admin<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-alt"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Contact</h4>
                                    <div class="row">
                                    <div class="property-agent">
                  <h4 class="title-agent"></h4>
                  <p class="color-text-a">
                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                    dui. Quisque velit nisi,
                    pretium ut lacinia in, elementum id enim.
                  </p>
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between" style="margin-right: 38px;">
                      <strong>Phone:</strong>
                      <span class="color-text-a">+228 70 65 17 05</span>
                    </li>
                    <li class="d-flex justify-content-between" style="margin-right: 38px;">
                      <strong>Mobile:</strong>
                      <span class="color-text-a">+228 70 65 17 05</span>
                    </li>
                    <li class="d-flex justify-content-between" style="margin-right: 38px;">
                      <strong>Email:</strong>
                      <span class="color-text-a">support@aurabais.com</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>whatsapp:</strong>
                      <span class="color-text-a"> 
                        
                        <a href="https://api.whatsapp.com/send?phone=22870392801&text=salut je suis intéressé Par {{$produit->nom}} et d'identifiant {{$produit->id}}">
                        <img src="{{asset ('front/images/whsap.png') }}" alt="" style="width:61px !important;margin-right: 40px;">
                        </a>
                        <!-- + 228 70392801 -->
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Telegram:</strong>
                      <span class="color-text-a"> 
                        <a href="https://t.me/edmoka&text=salut je suis intéressé Par {{$produit->nom}} et d'identifiant {{$produit->id}}"">
                        <img src="{{asset ('front/images/telegram.png') }}" alt="" style="width:88px !important;margin-right: 26px;">
                        </a>
                        <!-- + 228 97356136 -->
                      </span>
                    </li>
                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Produit similaire</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						@foreach($similaire as $prod)
						<div class="single-product">
							<div class="product-img">
								<a href="/detail/{{$prod-> id}}">
									<img class="default-img" src="{{ asset('uploads/produit/'.$prod->picture) }}" alt="#">
									<img class="hover-img" src="{{ asset('uploads/produit/'.$prod->images) }}" alt="#">
									 
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="{{url('/Boutique')}}"><i class=" ti-eye"></i><span>Quick Shop</span></a>
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
								<h3><a href="/detail/{{$prod-> id}}">{{$prod->nom}}</a></h3>
								<div class="product-price">
									<!-- <span class="old">Fcfa{{$prod->prix}}</span> -->
									<span>Fcfa{{$prod->prix}}</span>
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
												<img src="images/modal1.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal2.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal3.jpg" alt="#">
											</div>
											<div class="single-slider">
												<img src="images/modal4.jpg" alt="#">
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
	
@endsection
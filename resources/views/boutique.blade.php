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
								<li class="active"><a href="#">Boutique</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Show :</label>
											<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
											</select>
										</div>
										<div class="single-shorter">
											<label>Sort By :</label>
											<select>
												<option selected="selected">Name</option>
												<option>Price</option>
												<option>Size</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
										<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
										<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								<!--/ End Shop Top -->
							</div>
						</div>
						<div class="row">
                            @foreach ($produit as $prod)
							<div class="col-lg-3 col-md-6 col-12">
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
										<h3><a href="{{ url('/detail/'.$prod->id) }}">{{$prod->nom}}</a></h3>
										<div class="product-price">
											<span>{{$prod->prix}}</span>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
						 
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

@endsection
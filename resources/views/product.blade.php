@extends('layouts.app')
@section('content')
	<!--====== SLIDER PART START ======-->
    
    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
			
			<div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center" >
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Poser 12</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Easily Create 3D Character Art and Animation</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                                </div>
                            </div>						
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block" >
									<img src="assets/images/slider/1.jpg" alt="Slider">
                                </div>
                            </div>
                        </div>
                    </div>
			</div>	

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/3.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>-50% <br> OFF</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Sci-Fi</span> Clothing</h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s" style="color: #f0f0f0;">Enjoy savings of 50% for all - 60% off for PRIME members!</p>
                                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">VGS Article <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/2.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>L'H<br> JEANS</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Poser Pulse</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s" style="color: #f0f0f0;">Feel it getting stronger!</p>
                                        <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Article <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container fluid -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== DISCOUNT PRODUCT PART START ======-->
    
    <section id="discount-product" class="discount-product pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="assets/images/discount-product/product-1.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Security Protection Escort <br> Engagement Drone</h4>
                            <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="assets/images/discount-product/product-2.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Hot Offer <br> Fringe Poser Prop</h4>
                            <a href="#">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== DISCOUNT PRODUCT PART ENDS ======-->
   
    <!--====== PRODUCT PART START ======-->
    
    <section id="product" class="product-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">MARKETPLACE</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="active" id="v-pills-everything-tab" data-toggle="pill" href="#v-pills-everything" role="tab" aria-controls="v-pills-everything" aria-selected="true">Everything</a>
                            
                            <a id="v-pills-lafemme-tab" data-toggle="pill" href="#v-pills-lafemme" role="tab" aria-controls="v-pills-lafemme" aria-selected="false">La Femme</a>
                            
                            <a id="v-pills-lhomme-tab" data-toggle="pill" href="#v-pills-lhomme" role="tab" aria-controls="v-pills-lhomme" aria-selected="false">L'Homme</a>
                            
                            <a id="v-pills-other-tab" data-toggle="pill" href="#v-pills-other" role="tab" aria-controls="v-pills-other" aria-selected="false">Other</a>
                        </div> <!-- nav -->
                    </div> <!-- collection menu -->
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-everything" role="tabpanel" aria-labelledby="v-pills-everything-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
									@if(isset($products))
										@foreach ($products as $product)
										<div class="col-md-4">
											<div class="single-product-items">
												<div class="product-item-image">
													<a href="#"><img src="{{$product->image_name}}" alt="Product"></a>
													<div class="product-discount-tag">
														<p>-50%</p>
													</div>
												</div>
												<div class="product-item-content text-center mt-30">
													<h5 class="product-title"><a href="#">{{$product->name}}</a></h5>
													<ul class="rating">
														<li><i class="lni-star-filled"></i></li>
														<li><i class="lni-star-filled"></i></li>
														<li><i class="lni-star-filled"></i></li>
														<li><i class="lni-star-filled"></i></li>
														<li><i class="lni-star-filled"></i></li>
													</ul>
													<span class="regular-price">${{$product->sale_price}}</span>
													<span class="discount-price">${{$product->price}}</span>												
													<add-to-cart-button product-id="{{$product->id}}"
														user-id="{{auth()->user()->id ?? 0}}"
													/>
												</div>
											</div> <!-- single product items -->
										</div>
										@endforeach
									@endif
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-lafemme" role="tabpanel" aria-labelledby="v-pills-lafemme-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
									@if(isset($products))
										@foreach ($products as $product)
											@if ($product->id == 1 or $product->id == 2 or $product->id == 5 or $product->id==6)
											<div class="col-md-4">
												<div class="single-product-items">
													<div class="product-item-image">
														<a href="#"><img src="{{$product->image_name}}" alt="Product"></a>
														<div class="product-discount-tag">
															<p>-50%</p>
														</div>
													</div>
													<div class="product-item-content text-center mt-30">
														<h5 class="product-title"><a href="#">{{$product->name}}</a></h5>
														<ul class="rating">
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
														</ul>
														<span class="regular-price">${{$product->sale_price}}</span>
														<span class="discount-price">${{$product->price}}</span>												
														<add-to-cart-button product-id="{{$product->id}}"
															user-id="{{auth()->user()->id ?? 0}}"
														/>
													</div>
												</div> <!-- single product items -->
											</div>
											@endif
										@endforeach
									@endif
                                </div> <!-- row -->
                            </div> <!-- product items -->
                        </div> <!-- tab pane -->

                        <div class="tab-pane fade" id="v-pills-lhomme" role="tabpanel" aria-labelledby="v-pills-lhomme-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
									@if(isset($products))
										@foreach ($products as $product)
											@if ($product->id == 7 or $product->id == 9 or $product->id==11 or $product->id == 12)
											<div class="col-md-4">
												<div class="single-product-items">
													<div class="product-item-image">
														<a href="#"><img src="{{$product->image_name}}" alt="Product"></a>
														<div class="product-discount-tag">
															<p>-50%</p>
														</div>
													</div>
													<div class="product-item-content text-center mt-30">
														<h5 class="product-title"><a href="#">{{$product->name}}</a></h5>
														<ul class="rating">
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
														</ul>
														<span class="regular-price">${{$product->sale_price}}</span>
														<span class="discount-price">${{$product->price}}</span>												
														<add-to-cart-button product-id="{{$product->id}}"
															user-id="{{auth()->user()->id ?? 0}}"
														/>
													</div>
												</div> <!-- single product items -->
											</div>
										@endif
										@endforeach
									@endif
								</div> <!-- product items -->
							</div> <!-- tab pane -->
						</div>
						
                        <div class="tab-pane fade" id="v-pills-other" role="tabpanel" aria-labelledby="v-pills-other-tab">
                            <div class="product-items mt-30">
                                <div class="row product-items-active">
									@if(isset($products))
										@foreach ($products as $product)
											@if ($product->id == 3 or $product->id == 4 or $product->id == 8 or $product->id == 10)
											<div class="col-md-4">
												<div class="single-product-items">
													<div class="product-item-image">
														<a href="#"><img src="{{$product->image_name}}" alt="Product"></a>
														<div class="product-discount-tag">
															<p>-50%</p>
														</div>
													</div>
													<div class="product-item-content text-center mt-30">
														<h5 class="product-title"><a href="#">{{$product->name}}</a></h5>
														<ul class="rating">
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
															<li><i class="lni-star-filled"></i></li>
														</ul>
														<span class="regular-price">${{$product->sale_price}}</span>
														<span class="discount-price">${{$product->price}}</span>												
														<add-to-cart-button product-id="{{$product->id}}"
															user-id="{{auth()->user()->id ?? 0}}"
														/>
													</div>
												</div> <!-- single product items -->
											</div>
										@endif
										@endforeach
									@endif
								</div> <!-- product items -->
							</div> <!-- tab pane -->
						</div>						

                    </div> <!-- tab content --> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->

    <!--======  BLOG PART START ======-->
    
    <section id="blog" class="blog-area pt-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">Latest News</h3>
                        <p>Covering essential Renderosity news and hand-picked CG industry news.</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">Artist of the Month for February 2022 - Danny_G</a></h4>
                                <span>FEBRUARY 1, 2022</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin-1.jpg" alt="Admin"></a>
                                    </div>
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">gToon</a></h6>
                                    </div>
                                </div>  <!-- meta admin -->
                                <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> <!-- meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-2.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">News of the Week for Feb 19-26, 2022</a></h4>
                                <span>FEBRUARY 19, 2022</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin-1.jpg" alt="Admin"></a>
                                    </div>
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">gToon</a></h6>
                                    </div>
                                </div>  <!-- meta admin -->
                                <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> <!-- meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/blog/b-3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">Interview with Danny_G, Artist of the Month</a></h4>
                                <span>FEBRUARY 15, 2022</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin-1.jpg" alt="Admin"></a>
                                    </div>
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">gToon</a></h6>
                                    </div>
                                </div>  <!-- meta admin -->
                                <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> <!-- meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--======  BLOG PART ENDS ======-->

    <!--====== CONTACT PART START ======-->
    
    <section id="contact" class="contact-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="contact-title text-center">
                        <h2 class="title">Contact Us</h2>
                    </div> <!-- contact title -->
                </div>
            </div> <!-- row -->
            <div class="contact-box mt-70">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info pt-25">
                            <h4 class="info-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-phone-handset"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>+1 615 598 9770</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-envelope"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>store@renderosity.com</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                                <li>
                                    <div class="single-info mt-30">
                                        <div class="info-icon">
                                            <i class="lni-home"></i>
                                        </div>
                                        <div class="info-content">
                                            <p>239 John Rice Blvd., Suite F Murfreesboro, TN 37129</p>
                                        </div>
                                    </div> <!-- single info -->
                                </li>
                            </ul>
                        </div> <!-- contact info -->
                    </div> 
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-form form-group">
                                            <input type="text" name="name" placeholder="Enter your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form form-group">
                                            <input type="email" name="email" placeholder="Enter your email"  data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-form form-group">
                                            <textarea name="message" placeholder="Enter your message" data-error="Please leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-lg-12">
                                        <div class="single-form form-group">
                                            <button class="main-btn" type="submit">CONTACT NOW</button>
                                        </div> <!-- single form -->
                                    </div>
                                </div> <!-- row -->
                            </form>
                        </div> <!-- row -->
                    </div> 
                </div> <!-- row -->
            </div> <!-- contact box -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                            <p class="mt-10">The Renderosity community is made up of members who have a passion for helping others learn, share and grow in digital art.</p>
                            <ul class="footer-social mt-25">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Marketplace</h5>
                            <ul>
                                <li><a href="#">3D Models</a></li>
                                <li><a href="#">2D Brushes, Textures & Scripts</a></li>
                                <li><a href="#">3D Figure Essentials</a></li>
                                <li><a href="#">Merchant Resources</a></li>
                                <li><a href="#">Lights & Cameras</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Help</h5>
                            <ul>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Phone :</span>
                                        <div class="footer-info-content">
                                            <p>+1 866-220-2949</p>
                                            <p>+1 615 598 9770</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Email :</span>
                                        <div class="footer-info-content">
                                            <p>admin@renderosity.com</p>
                                            <p>support@renderosity.com</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Address :</span>
                                        <div class="footer-info-content">
                                            <p>239 John Rice Blvd., Suite F Murfreesboro, TN 37129</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
        </div> <!-- container -->
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->

@endsection

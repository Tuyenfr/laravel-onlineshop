
@extends('client_layout.master')

@section('title')

Home

@endsection

@section('content')

      <!-- ********************* start content ******************** -->

      <!-- start sliders -->

      <div id="bootstrap-touch-slider" class="carousel bs-slider fade control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >
         <!-- Indicators -->
         <ol class="carousel-indicators">
            @foreach($sliders as $slider)
            <li data-target="#bootstrap-touch-slider" class="{{$increment == 0 ? 'active' : ""}}" data-slide-to="{{$increment++}}"></li>
            @endforeach
         </ol>
         <!-- Wrapper For Slides -->
         <div class="carousel-inner" role="listbox">
            @foreach ($sliders as $slider)
            <div class="item {{$increment1 == 0 ? 'active' : ""}}" style="background-image:url({{asset('storage/sliders/'.$slider->photo)}});">
               <div class="bs-slider-overlay"></div>
               <div class="container">
                  <div class="row">
                     <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">{{$slider->heading}}</h1>
                        <p data-animation="animated fadeInDown">{{$slider->content}}</p>
                        <a href="{{$slider->button_url}}" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown">{{$slider->button_text}}</a>
                     </div>
                  </div>
               </div>
            </div>
            @php
            $increment1++;
            @endphp
            @endforeach
         </div>
         <!-- Slider Left Control -->
         <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
         <span class="fa fa-angle-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <!-- Slider Right Control -->
         <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
         <span class="fa fa-angle-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      
      </div>
    
      <!-- end sliders -->

      <!-- start services -->
      <div class="service bg-gray">
         <div class="container">
            <div class="row">
               @foreach($services as $service)
               <div class="col-md-4">
                  <div class="item">
                     <div class="photo"><img src="{{asset('storage/serviceimages/'.$service->photo)}}" width="150px" alt="Easy Returns"></div>
                     <h3>{{$service->title}}</h3>
                     <p>{{$service->content}}</p>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <!-- end services -->

      <!-- start featured products -->
      <div class="product pt_70 pb_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="headline">
                     <h2>Featured Products</h2>
                     <h3>Our list on Top Featured Products</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="product-carousel">
                     @foreach ($featuredproducts as $featuredproduct)
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('storage/productimages/'.$featuredproduct->p_featured_photo)}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=84">{{$featuredproduct->p_name}}</a></h3>
                           <h4>
                              {{$featuredproduct->p_current_price}}
                              <del>
                                 {{$featuredproduct->p_old_price}}
                              </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=84"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end featured products -->

      <!-- start lastest products -->
      <div class="product bg-gray pt_70 pb_30">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="headline">
                     <h2>Latest Products</h2>
                     <h3>Our list of recently added products</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="product-carousel">
                     @foreach($latestproducts as $latestproduct)
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('storage/productimages/'.$latestproduct->p_featured_photo)}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=102">{{$latestproduct->p_name}}</a></h3>
                           <h4>
                              {{$latestproduct->p_current_price}}
                              <del>
                              {{$latestproduct->p_old_price}}
                              </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=102"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end lastest products -->

      <!-- start popular products -->
      <div class="product pt_70 pb_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="headline">
                     <h2>Popular Products</h2>
                     <h3>Popular products based on customer's choice</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="product-carousel">
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-84.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=84">Loose-fit One-Shoulder Cutout Rib Knit Maxi Dress</a></h3>
                           <h4>
                              $39
                              <del>
                              $51                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=84"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-92.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=92">Travelpro Laptop Carry-on Travel Tote Bag</a></h3>
                           <h4>
                              $91
                              <del>
                              $110                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=92"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-95.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=95">Bose QuietComfort 45 Bluetooth Wireless Headphones</a></h3>
                           <h4>
                              $279
                              <del>
                              $329                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=95"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-97.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=97">Women's Tea Length Dress with Rosette Detail (Petite & Regular)</a></h3>
                           <h4>
                              $67
                              <del>
                              $87                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=97"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-96.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=96">Men's Loose Fit Heavyweight Long-Sleeve Pocket T-Shirt</a></h3>
                           <h4>
                              $23
                              <del>
                              $29                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=96"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-102.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=102">Women's Plus-Size Shirt Dress with Gold Hardware</a></h3>
                           <h4>
                              $169 
                              <del>
                              $190                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=102"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-86.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=86">Amazfit GTS 3 Smart Watch for Android iPhone</a></h3>
                           <h4>
                              $179 
                              <del>
                              $199                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=86"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                     <div class="item">
                        <div class="thumb">
                           <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-94.jpg')}});"></div>
                           <div class="overlay"></div>
                        </div>
                        <div class="text">
                           <h3><a href="product.php?id=94">WD 5TB Elements Portable External Hard Drive HDD</a></h3>
                           <h4>
                              $149 
                              <del>
                              $160                                    </del>
                           </h4>
                           <div class="rating">
                           </div>
                           <p><a href="product.php?id=94"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end popular products -->

      <!-- ********************** end content ******************** -->

      @endsection
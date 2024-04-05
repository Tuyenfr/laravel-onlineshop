
@extends('client_layout.master')

@section('title')

Search product

@endsection

@section('content')

   <!-- start content -->
   <div class="page-banner" style="background-image: url({{asset('frontend/assets/uploads/banner_search.jpg')}});">
    <div class="overlay"></div>
    <div class="inner">
       <h1>
          Search By: 
          Watch            
       </h1>
    </div>
 </div>
 <div class="page">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="product product-cat">
                <div class="row">
                   <div class="col-md-3 item item-search-result">
                      <div class="inner">
                         <div class="thumb">
                            <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-86.jpg')}});"></div>
                            <div class="overlay"></div>
                         </div>
                         <div class="text">
                            <h3><a href="product.php?id=86">Amazfit GTS 3 Smart Watch for Android iPhone</a></h3>
                            <h4>
                               $179 
                               <del>
                               $199                                                </del>
                            </h4>
                            <div class="rating">
                            </div>
                            <p><a href="product.php?id=86">Add to Cart</a></p>
                         </div>
                      </div>
                   </div>
                   <div class="clear"></div>
                   <div class="pagination">
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end content -->

@endsection
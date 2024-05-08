
@extends('client_layout.master')

@section('title')

Product Details

@endsection

@section('content')

	  <!-- ********************** start content ********************** -->

	  <!-- start page content -->
    <div class="page">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="breadcrumb mb_30">
                  <ul>
                     <li><a href="">Home</a></li>
                     <li>></li>
                     <li><a href="{{url('productbytopcategory', [$product->tcat_id])}}">{{$product->tcat_id}}</a></li>
                     <li>></li>
                     <li><a href="{{url('productbymidcategory', [$product->tcat_id, $product->mcat_id])}}">{{$product->mcat_id}}</a></li>
                     <li>></li>
                     <li><a href="{{url('productbyendcategory', [$product->tcat_id, $product->mcat_id, $product->ecat_id])}}">{{$product->ecat_id}}</a></li>
                     <li>></li>
                     <li>{{$product->p_name}}</li>
                  </ul>
               </div>
               <div class="product">
                  <div class="row">
                     <div class="col-md-5">
                        <ul class="prod-slider">
                           <li style="background-image: url({{asset('storage/productimages/'.$product->p_featured_photo)}});">
                              <a class="popup" href="{{asset('storage/productimages/'.$product->p_featured_photo)}}"></a>
                           </li>
                           @foreach($selectedphotos as $selectedphoto)
                           <li style="background-image: url({{asset('storage/productimages/'.$selectedphoto)}});">
                              <a class="popup" href="{{asset('storage/productimages/'.$selectedphoto)}}"></a>
                           </li>
                           @endforeach
                        </ul>
                        <div id="prod-pager">
                           <a data-slide-index="0" href="">
                              <div class="prod-pager-thumb" style="background-image: url({{asset('storage/productimages/'.$product->p_featured_photo)}})"></div>
                           </a>
                           @foreach($selectedphotos as $selectedphoto)
                           <a data-slide-index="{{$increment++}}" href="">
                              <div class="prod-pager-thumb" style="background-image: url({{asset('storage/productimages/'.$selectedphoto)}})"></div>
                           </a>
                           @endforeach
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="p-title">
                           <h2>{{$product->p_name}}</h2>
                        </div>
                        <div class="p-review">
                           <div class="rating">
                           </div>
                        </div>
                        <div class="p-short-des">
                           <p>
                           <p style="padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;">
                              <span id="productTitle" class="a-size-large product-title-word-break" style="text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important; font-family: Roboto;">{!!$product->p_short_description!!}</span>
                           </p>
                           </p>
                        </div>
                        <form action="{{url('addproducttocart', [$product->id])}}" method="post">
                           @csrf
                           <div class="p-quantity">
                              <div class="row">
                                 <div class="col-md-12 mb_20">
                                    Select Size <br>
                                    <select name="size_id" class="form-control select2" style="width:auto;">
                                       @foreach ($selectedsizes as $selectedsize)
                                       <option value="{{$selectedsize}}">{{$selectedsize}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="col-md-12">
                                    Select Color <br>
                                    <select name="color_id" class="form-control select2" style="width:auto;">
                                       @foreach ($selectedcolors as $selectedcolor)
                                       <option value="{{$selectedcolor}}">{{$selectedcolor}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="p-price">
                              <span style="font-size:14px;">Product Price</span><br>
                              <span>
                              <del>{{$product->p_old_price}}</del>
                              {{$product->p_current_price}}  </span>
                           </div>
                           <input type="hidden" name="p_current_price" value="{{$product->p_current_price}}">
                           <input type="hidden" name="p_name" value="{{$product->p_name}}">
                           <input type="hidden" name="p_featured_photo" value="{{asset('storage/productimages/'.$product->p_featured_photo)}}">
                           <div class="p-quantity">
                              Quantity <br>
                              <input type="number" class="input-text qty" step="1" min="1" max="{{$product->p_qty}}" name="p_qty" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                           </div>
                           <div class="btn-cart btn-cart1">
                              <input type="submit" value="Add to Cart" name="form_add_to_cart">
                           </div>
                        </form>
                        <div class="share">
                           Share This Product <br>
                           <div class="sharethis-inline-share-buttons"></div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                           <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Product Description</a></li>
                           <li role="presentation"><a href="#feature" aria-controls="feature" role="tab" data-toggle="tab">Features</a></li>
                           <li role="presentation"><a href="#condition" aria-controls="condition" role="tab" data-toggle="tab">Conditions</a></li>
                           <li role="presentation"><a href="#return_policy" aria-controls="return_policy" role="tab" data-toggle="tab">Return Policy</a></li>
                           <!-- <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews</a></li> -->
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                           <div role="tabpanel" class="tab-pane active" id="description" style="margin-top: -30px;">
                              <p>
                              <p style="padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;">{!!$product->p_description!!}<br></p>
                              </p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="feature" style="margin-top: -30px;">
                              <p>{!!$product->p_feature!!}</p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="condition" style="margin-top: -30px;">
                              <p>
                              <p><span style="color: rgb(51, 51, 51); font-size: 14px;">{!!$product->p_condition!!}</span><br></p>
                              </p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="return_policy" style="margin-top: -30px;">
                              <p>
                              <p><span style="margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;">{!!$product->p_return_policy!!}</p>
                              </p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="review" style="margin-top: -30px;">
                              <div class="review-form">
                                 <h2>Reviews (0)</h2>
                                 Review not found                                        
                                 <h2>Give a Review</h2>
                                 <form action="" method="post">
                                    <div class="rating-section">
                                       <input type="radio" name="rating" class="rating" value="1" checked>
                                       <input type="radio" name="rating" class="rating" value="2" checked>
                                       <input type="radio" name="rating" class="rating" value="3" checked>
                                       <input type="radio" name="rating" class="rating" value="4" checked>
                                       <input type="radio" name="rating" class="rating" value="5" checked>
                                    </div>
                                    <div class="form-group">
                                       <textarea name="comment" class="form-control" cols="30" rows="10" placeholder="Write your comment (optional)" style="height:100px;"></textarea>
                                    </div>
                                    <input type="submit" class="btn btn-default" name="form_review" value="Submit Review">
                                 </form>
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
 


   <div class="product bg-gray pt_70 pb_70">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="headline">
                  <h2>Related Products</h2>
                  <h3>See all the related products from below</h3>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="product-carousel">
               </div>
            </div>
         </div>
      </div>
   </div>
 <!-- end page content -->

@endsection
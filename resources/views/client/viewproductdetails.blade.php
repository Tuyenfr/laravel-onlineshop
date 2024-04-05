
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
                     <li><a href="product-category.php?id=1&type=top-category">Men</a></li>
                     <li>></li>
                     <li><a href="product-category.php?id=1&type=mid-category">Men Accessories</a></li>
                     <li>></li>
                     <li><a href="product-category.php?id=3&type=end-category">Watches</a></li>
                     <li>></li>
                     <li>Amazfit GTS 3 Smart Watch for Android iPhone</li>
                  </ul>
               </div>
               <div class="product">
                  <div class="row">
                     <div class="col-md-5">
                        <ul class="prod-slider">
                           <li style="background-image: url({{asset('frontend/assets/uploads/product-featured-86.jpg')}});">
                              <a class="popup" href="{{asset('frontend/assets/uploads/product-featured-86.jpg')}}"></a>
                           </li>
                           <li style="background-image: url({{asset('frontend/assets/uploads/product_photos/112.jpg')}});">
                              <a class="popup" href="{{asset('frontend/assets/uploads/product_photos/112.jpg')}}"></a>
                           </li>
                           <li style="background-image: url({{asset('frontend/assets/uploads/product_photos/113.jpg')}});">
                              <a class="popup" href="{{asset('frontend/assets/uploads/product_photos/113.jpg')}}"></a>
                           </li>
                        </ul>
                        <div id="prod-pager">
                           <a data-slide-index="0" href="">
                              <div class="prod-pager-thumb" style="background-image: url({{asset('frontend/assets/uploads/product-featured-86.jpg')}})"></div>
                           </a>
                           <a data-slide-index="1" href="">
                              <div class="prod-pager-thumb" style="background-image: url({{asset('frontend/assets/uploads/product_photos/112.jpg')}})"></div>
                           </a>
                           <a data-slide-index="2" href="">
                              <div class="prod-pager-thumb" style="background-image: url({{asset('frontend/assets/uploads/product_photos/113.jpg')}})"></div>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="p-title">
                           <h2>Amazfit GTS 3 Smart Watch for Android iPhone</h2>
                        </div>
                        <div class="p-review">
                           <div class="rating">
                           </div>
                        </div>
                        <div class="p-short-des">
                           <p>
                           <p style="padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;">
                              <span id="productTitle" class="a-size-large product-title-word-break" style="text-rendering: optimizelegibility; word-break: break-word; line-height: 32px !important; font-family: Roboto;">Alexa Built-in, GPS Fitness Sports Watch with 150 Sports Modes, 1.75â€ AMOLED Display, 12-Day Battery Life, Blood Oxygen Heart Rate Tracking</span>
                           </p>
                           </p>
                        </div>
                        <form action="" method="post">
                           <div class="p-quantity">
                              <div class="row">
                                 <div class="col-md-12 mb_20">
                                    Select Size <br>
                                    <select name="size_id" class="form-control select2" style="width:auto;">
                                       <option value="26">Free Size</option>
                                    </select>
                                 </div>
                                 <div class="col-md-12">
                                    Select Color <br>
                                    <select name="color_id" class="form-control select2" style="width:auto;">
                                       <option value="2">Black</option>
                                       <option value="6">White</option>
                                       <option value="17">Gray</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="p-price">
                              <span style="font-size:14px;">Product Price</span><br>
                              <span>
                              <del>$199</del>
                              $179                                </span>
                           </div>
                           <input type="hidden" name="p_current_price" value="179">
                           <input type="hidden" name="p_name" value="Amazfit GTS 3 Smart Watch for Android iPhone">
                           <input type="hidden" name="p_featured_photo" value="product-featured-86.jpg">
                           <div class="p-quantity">
                              Quantity <br>
                              <input type="number" class="input-text qty" step="1" min="1" max="" name="p_qty" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
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
                              <p style="padding: 0px; margin-top: 0px; text-rendering: optimizelegibility; margin-bottom: 0px !important; line-height: 32px !important;">Amazfit GTS 3 is the most powerful, easy-to-use smartwatch that combining cutting-edge health &amp; fitness features and a fashionable slim &amp; light design. The smartwatch adopts a 1.75-inch ultra HD AMOLED display which has increased by 14% compared with the previous generation and boasts a 72.4% screen-to-body ratio that's among the highest in the smartwatch industry. Match your mood, an outfit or the occasion with a wide selection of more than 100 stylish watch faces - or even upload your own photo as the background image for true personalization. Thanks to the advanced 6PD (six photodiodes) BioTrackerâ„¢ PPG 3.0 biometric sensor, GTS 3 can track your heart rate, blood-oxygen saturation, stress level and breathing rate in one single tap of the watch, for a result in as little as 45 seconds. And Its health management features also includes in-depth monitoring of sleep &amp; sleep breathing quality and female cycle tracking. This sports watch is your next-level fitness partner with 150+ sports modes, smart recognition of 8 sports, and a water-resistance grade of 5 ATM. Comes with Alexa built-in and an offline voice assistant to liberate your hands, and supports GPS, GLONASS, Galileo, BDS and QZSS satellite navigation systems to accurately track your route. Super endurance that won't let you down, it can last for up to 12 days with typical usage and 20 days with battery saver mode. Compatible with Android 7.0 and above, iOS 12.0 and above device.<br></p>
                              </p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="feature" style="margin-top: -30px;">
                              <p>
                              <ul>
                                 <li>Smart 24H Monitoring of Blood-oxygen Levels</li>
                                 <li>Monitor Heart Rate All Day &amp; While Swimming</li>
                                 <li>A Simple Health Overview with PAI Health Assessment</li>
                                 <li>In-depth Monitoring of Sleep &amp; Sleep Breathing Quality</li>
                                 <li>Stress Level Monitoring &amp; Measurement</li>
                                 <li>Female Cycle Tracking</li>
                                 <li><span style="color: rgb(15, 17, 17); font-family:  Arial, sans-serif; font-size: 14px;">Alexa Built in</span></li>
                                 <li><span style="color: rgb(15, 17, 17); font-family:  Arial, sans-serif; font-size: 14px;">12-Day battery life<br></span><span style="color: rgb(15, 17, 17); font-family:  Arial, sans-serif; font-size: 14px; font-weight: 700;"><br></span><span style="color: rgb(15, 17, 17); font-family: Arial, sans-serif; font-size: 14px; font-weight: 700;"><br></span><br></li>
                              </ul>
                              </p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="condition" style="margin-top: -30px;">
                              <p>
                              <p><span style="color: rgb(51, 51, 51); font-size: 14px;">This is a sample text for conditions.</span><br></p>
                              </p>
                           </div>
                           <div role="tabpanel" class="tab-pane" id="return_policy" style="margin-top: -30px;">
                              <p>
                              <p><span style="margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;">Offers a&nbsp;</span><span style="margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;">15 to 30-day window</span><span style="margin: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;">&nbsp;in which customers can return a product and ask for a refund. Some businesses extend that period up to 90 days. Regardless of the time frame you choose, ensuring that you actually have a time frame is essential.</span><br></p>
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
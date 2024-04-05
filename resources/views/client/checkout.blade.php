@extends('client_layout.master')

@section('title')

Checkout

@endsection

@section('content')

  <!-- ********************** start content ********************** -->
	  <!-- start banner -->
    <div class="page-banner" style="background-image: url({{asset('frontend/assets/uploads/banner_cart.jpg')}})">
      <div class="overlay"></div>
      <div class="page-banner-inner">
         <h1>Checkout</h1>
      </div>
   </div>
 <!-- end banner -->

 

 <!-- start page content -->
   <div class="page">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p>
                  <a href="login.php" class="btn btn-md btn-danger">Please login as customer to checkout</a>
               </p>
            </div>
            <div class="col-md-12">
               <h3 class="special">Order Details</h3>
               <div class="cart">
                  <table class="table table-responsive table-hover table-bordered">
                     <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th class="text-right">Total</th>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>
                           <img src="{{asset('frontend/assets/uploads/product-featured-95.jpg')}}" alt="">
                        </td>
                        <td>Bose QuietComfort 45 Bluetooth Wireless Headphones</td>
                        <td>One Size for All</td>
                        <td>Black</td>
                        <td>$279</td>
                        <td>1</td>
                        <td class="text-right">
                           $279                            
                        </td>
                     </tr>
                     <tr>
                        <th colspan="7" class="total-text">Sub Total</th>
                        <th class="total-amount">$279</th>
                     </tr>
                     <tr>
                        <td colspan="7" class="total-text">Shipping Cost</td>
                        <td class="total-amount">$100</td>
                     </tr>
                     <tr>
                        <th colspan="7" class="total-text">Total</th>
                        <th class="total-amount">
                           $379                            
                        </th>
                     </tr>
                  </table>
               </div>
               <div class="billing-address">
                  <div class="row">
                     <div class="col-md-6">
                        <h3 class="special">Billing Address</h3>
                        <table class="table table-responsive table-bordered table-hover table-striped bill-address">
                           <tr>
                              <td>Full Name</td>
                              <td>Héritier N'kele</p></td>
                           </tr>
                           <tr>
                              <td>Company Name</td>
                              <td>Udemy</td>
                           </tr>
                           <tr>
                              <td>Phone Number</td>
                              <td>0824754958</td>
                           </tr>
                           <tr>
                              <td>Country</td>
                              <td>
                                 Afghanistan                                    
                              </td>
                           </tr>
                           <tr>
                              <td>Address</td>
                              <td>
                                 Av. Malula num 12 Lemba/Righini                                    
                              </td>
                           </tr>
                           <tr>
                              <td>City</td>
                              <td>Kinshasa</td>
                           </tr>
                           <tr>
                              <td>State</td>
                              <td>Kinshasa</td>
                           </tr>
                           <tr>
                              <td>Zip Code</td>
                              <td>3287</td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-md-6">
                        <h3 class="special">Shipping Address</h3>
                        <table class="table table-responsive table-bordered table-hover table-striped bill-address">
                           <tr>
                              <td>Full Name</td>
                              <td>Héritier N'kele</p></td>
                           </tr>
                           <tr>
                              <td>Company Name</td>
                              <td>Udemy</td>
                           </tr>
                           <tr>
                              <td>Phone Number</td>
                              <td>0824754958</td>
                           </tr>
                           <tr>
                              <td>Country</td>
                              <td>
                                 Afghanistan                                    
                              </td>
                           </tr>
                           <tr>
                              <td>Address</td>
                              <td>
                                 Av. Malula num 12 Lemba/Righini                                    
                              </td>
                           </tr>
                           <tr>
                              <td>City</td>
                              <td>Kinshasa</td>
                           </tr>
                           <tr>
                              <td>State</td>
                              <td>Kinshasa</td>
                           </tr>
                           <tr>
                              <td>Zip Code</td>
                              <td>3287</td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="cart-buttons">
                  <ul>
                     <li><a href="{{ url('cart')}}" class="btn btn-primary">Back to Cart</a></li>
                  </ul>
               </div>
               <div class="clear"></div>
               <h3 class="special">Payment Section</h3>
               <div class="row">
                  <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12 form-group">
                           <label for="">Select Payment Method *</label>
                           <select name="payment_method" class="form-control select2" id="advFieldsStatus">
                              <option value="">Select a Method</option>
                              <option value="PayPal">PayPal</option>
                              <option value="Bank Deposit">Bank Deposit</option>
                           </select>
                        </div>
                        <form class="paypal" action="payment/paypal/payment_process.php" method="post" id="paypal_form" target="_blank">
                           <input type="hidden" name="cmd" value="_xclick" />
                           <input type="hidden" name="no_note" value="1" />
                           <input type="hidden" name="lc" value="UK" />
                           <input type="hidden" name="currency_code" value="USD" />
                           <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                           <input type="hidden" name="final_total" value="379">
                           <div class="col-md-12 form-group">
                              <input type="submit" class="btn btn-primary" value="Pay Now" name="form1">
                           </div>
                        </form>
                        <form action="payment/bank/init.php" method="post" id="bank_form">
                           <input type="hidden" name="amount" value="379">
                           <div class="col-md-12 form-group">
                              <label for="">Send to this Details</span></label><br>
                              Bank Name: WestView Bank<br />
                              Account Number: CA100270589600<br />
                              Branch Name: CA Branch<br />
                              Country: USABank Name: WestView Bank<br />
                              Account Number: CA100270589600<br />
                              Branch Name: CA Branch<br />
                              Country: USABank Name: WestView Bank<br />
                              Account Number: CA100270589600<br />
                              Branch Name: CA Branch<br />
                              Country: USA                                        
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="">Transaction Information <br><span style="font-size:12px;font-weight:normal;">(Include transaction id and other information correctly)</span></label>
                              <textarea name="transaction_info" class="form-control" cols="30" rows="10"></textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <input type="submit" class="btn btn-primary" value="Pay Now" name="form3">
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
 <!-- end page content -->

 <!-- ********************** end content ********************** -->

@endsection
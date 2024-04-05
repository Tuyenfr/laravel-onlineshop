
@extends('client_layout.master')

@section('title')

Cart

@endsection

@section('content')

	  <!-- ********************** start content ********************** -->

	  <!-- start banner -->
    <div class="page-banner" style="background-image: url({{asset('frontend/assets/uploads/banner_cart.jpg')}})">
      <div class="overlay"></div>
      <div class="page-banner-inner">
         <h1>Cart</h1>
      </div>
   </div>
 <!-- end banner -->

 <!-- start page content -->
   <div class="page">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <form action="" method="post">
                  <input type="hidden" name="_csrf" value="305e2e05d29f55b50a14ad09db8b623c" />				
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
                           <th class="text-center" style="width: 100px;">Action</th>
                        </tr>
                        <tr>
                           <td>1</td>
                           <td>
                              <img src="{{asset('frontend/assets/uploads/product-featured-86.jpg')}}" alt="">
                           </td>
                           <td>Amazfit GTS 3 Smart Watch for Android iPhone</td>
                           <td>Free Size</td>
                           <td>Black</td>
                           <td>$179</td>
                           <td>
                              <input type="hidden" name="product_id[]" value="86">
                              <input type="hidden" name="product_name[]" value="Amazfit GTS 3 Smart Watch for Android iPhone">
                              <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity[]" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                           </td>
                           <td class="text-right">
                              $179                            
                           </td>
                           <td class="text-center">
                              <a onclick="return confirmDelete();" href="cart-item-delete.php?id=86&size=26&color=2" class="trash"><i class="fa fa-trash" style="color:red;"></i></a>
                           </td>
                        </tr>
                        <tr>
                           <th colspan="7" class="total-text">Total</th>
                           <th class="total-amount">$179</th>
                           <th></th>
                        </tr>
                     </table>
                  </div>
                  <div class="cart-buttons">
                     <ul>
                        <li><input type="submit" value="Update Cart" class="btn btn-primary" name="form1"></li>
                        <li><a href="{{ url('/')}}" class="btn btn-primary">Continue Shopping</a></li>
                        <li><a href="{{ url('checkout')}}" class="btn btn-primary">Proceed to Checkout</a></li>
                     </ul>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
 <!-- end page content -->

 <!-- ********************** end content ********************** -->

@endsection
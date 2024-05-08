
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
                  @csrf
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

                        @php
                        $increment = 1;
                        @endphp

                        @if(Session::has('cart'))
                        @foreach(Session::get('topCart') as $item)
                        <tr>
                           <td>{{$increment++}}</td>
                           <td>
                              <img src="{{asset('storage/productimages/'.$item['product_image'])}}" alt="">
                           </td>
                           <td>{{$item['product_name']}}</td>
                           <td>{{$item['size']}}</td>
                           <td>{{$item['color']}}</td>
                           <td>${{$item['product_price']}}</td>
                           <td>
                              <input type="hidden" name="product_id" value="{{$item['product_id']}}">
                              <input type="hidden" name="product_name" value="{{$item['product_name']}}">
                              <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity[]" value="{{$item['qty']}}" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                           </td>
                           <td class="text-right">
                              ${{$item['product_price']*$item['qty']}}
                           </td>
                           <td class="text-center">
                              <a onclick="return confirmDelete();" href="cart-item-delete.php?id=86&size=26&color=2" class="trash"><i class="fa fa-trash" style="color:red;"></i></a>
                           </td>
                        </tr>
                        @endforeach
                        <tr>
                           <th colspan="7" class="total-text">Total</th>
                           <th class="total-amount">${{Session::get('cart')->totalPrice}}</th>
                           <th></th>
                        </tr>
                        
                        @endif
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
@extends('client_layout.master')

@section('title')
    Checkout
@endsection

@section('content')

    <!-- ********************** start content ********************** -->
    <!-- start banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend/assets/uploads/banner_cart.jpg') }})">
        <div class="overlay"></div>
        <div class="page-banner-inner">
            <h1>Checkout</h1>
        </div>
    </div>
    <!-- end banner -->



    <!-- start page content -->
    <div class="page">
        <div class="container">

            @if (Session::has('error'))
                <section class="content" style="min-height:auto;margin-bottom: -30px;">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="callout callout-danger">
                                <p>{{ Session::get('error') }}</p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            <div class="row">
                @if (!Session::has('customer'))
                    <div class="col-md-12">
                        <p>
                            <a href="{{ url('login') }}" class="btn btn-md btn-danger">Please login as customer to
                                checkout</a>
                        </p>
                    </div>
                @else
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
                                @foreach (Session::get('topCart') as $item)
                                    <tr>

                                        <td>{{ $increment++ }}</td>
                                        <td>
                                            <img src="{{ asset('storage/productimages/' . $item['product_image']) }}"
                                                alt="">
                                        </td>
                                        <td>{{ $item['product_name'] }}</td>
                                        <td>{{ $item['size'] }}</td>
                                        <td>{{ $item['color'] }}</td>
                                        <td>${{ $item['product_price'] }}</td>
                                        <td>{{ $item['qty'] }}</td>
                                        <td class="text-right">
                                            ${{ $item['product_price'] * $item['qty'] }}
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th colspan="7" class="total-text">Sub Total</th>
                                    <th class="total-amount">${{ Session::get('cart')->totalPrice }}</th>
                                </tr>
                                <tr>
                                    <td colspan="7" class="total-text">Shipping Cost</td>
                                    <td class="total-amount">${{ $shippingcost->amount }}</td>
                                </tr>
                                <tr>
                                    <th colspan="7" class="total-text">Total</th>
                                    <th class="total-amount">
                                        ${{ Session::get('cart')->totalPrice + $shippingcost->amount }}
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="billing-address">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="special">Billing Address</h3>
                                    <table
                                        class="table table-responsive table-bordered table-hover table-striped bill-address">
                                        <tr>
                                            <td>Full Name</td>
                                            <td>{{ $billingaddress->cust_b_name }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Company Name</td>
                                            <td>{{ $billingaddress->cust_b_cname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>{{ $billingaddress->cust_b_phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>
                                                {{ $billingaddress->cust_b_country }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                {{ $billingaddress->cust_b_address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>{{ $billingaddress->cust_b_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td>{{ $billingaddress->cust_b_state }}</td>
                                        </tr>
                                        <tr>
                                            <td>Zip Code</td>
                                            <td>{{ $billingaddress->cust_b_zip }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="special">Shipping Address</h3>
                                    <table
                                        class="table table-responsive table-bordered table-hover table-striped bill-address">
                                        <tr>
                                            <td>Full Name</td>
                                            <td>{{ $shippingaddress->cust_s_name }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Company Name</td>
                                            <td>{{ $shippingaddress->cust_s_cname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>{{ $shippingaddress->cust_s_phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>
                                                {{ $shippingaddress->cust_s_country }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                {{ $shippingaddress->cust_s_address }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>{{ $shippingaddress->cust_s_city }}</td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td>{{ $shippingaddress->cust_s_state }}</td>
                                        </tr>
                                        <tr>
                                            <td>Zip Code</td>
                                            <td>{{ $shippingaddress->cust_s_zip }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="cart-buttons">
                            <ul>
                                <li><a href="{{ url('cart') }}" class="btn btn-primary">Back to Cart</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <h3 class="special">Payment Section</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <form class="paypal" action="{{ url('paypal') }}" method="post">
                                        @csrf
                                        <div class="col-md-12 form-group">
                                            <input type="submit" class="btn btn-primary" value="Pay with Paypal account or credit card"
                                                name="form1">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- end page content -->

    <!-- ********************** end content ********************** -->

@endsection

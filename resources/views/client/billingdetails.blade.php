@extends('client_layout.master')

@section('title')
    Billing Details
@endsection

@section('content')
    <!-- ********************** start content ********************** -->

    <!-- start page content -->
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-sidebar">

                        @Include ('client_layout.dashboardheader')

                    </div>
                </div>

                @if (Session::has('status'))
                    <section class="content" style="min-height:auto;margin-bottom: -30px;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    <p>{{ Session::get('status') }}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

                <div class="col-md-12">
                    <div class="user-content">
                        <form action="{{ url('updateaddresses', [$billingaddress->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Update Billing Address</h3>
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="cust_b_name"
                                            value="{{ $billingaddress ? $billingaddress->cust_b_name : $customer->cust_name }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="cust_b_cname"
                                            value="{{ $billingaddress ? $billingaddress->cust_b_cname : $customer->cust_cname }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" name="cust_b_phone"
                                            value="{{ $billingaddress ? $billingaddress->cust_b_phone : $customer->cust_phone }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Country</label>
                                        <select name="cust_b_country" class="form-control" required>
                                            <option
                                                value="{{ $billingaddress ? $billingaddress->cust_b_country : $customer->cust_country }}"
                                                selected>
                                                {{ $billingaddress ? $billingaddress->cust_b_country : $customer->cust_country }}
                                            </option>

                                            @foreach ($countries as $country)
                                                @if ($country->country_name !== $billingaddress->cust_b_country)
                                                    <option value="{{ $country->country_name }}">
                                                        {{ $country->country_name }}</option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="cust_b_address" class="form-control" cols="30" rows="10" style="height:100px;" required>{{ $billingaddress ? $billingaddress->cust_b_address : $customer->cust_address }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <input type="text" class="form-control" name="cust_b_city"
                                            value="{{ $billingaddress ? $billingaddress->cust_b_city : $customer->cust_city }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">State</label>
                                        <input type="text" class="form-control" name="cust_b_state"
                                            value="{{ $billingaddress ? $billingaddress->cust_b_state : $customer->cust_state }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Zip Code</label>
                                        <input type="text" class="form-control" name="cust_b_zip"
                                            value="{{ $billingaddress ? $billingaddress->cust_b_zip : $customer->cust_zip }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Update Shipping Address</h3>
                                    <div class="form-group">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="cust_s_name"
                                            value="{{ $shippingaddress ? $shippingaddress->cust_s_name : $customer->cust_name }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" class="form-control" name="cust_s_cname"
                                            value="{{ $shippingaddress ? $shippingaddress->cust_s_cname : $customer->cust_cname }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" name="cust_s_phone"
                                            value="{{ $shippingaddress ? $shippingaddress->cust_s_phone : $customer->cust_phone }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Country</label>
                                        <select name="cust_s_country" class="form-control" required>
                                            <option
                                                value="{{ $shippingaddress ? $shippingaddress->cust_s_country : $customer->cust_country }}"
                                                selected>
                                                {{ $shippingaddress ? $shippingaddress->cust_s_country : $customer->cust_country }}
                                            </option>

                                            @foreach ($countries as $country)
                                                @if ($country->country_name !== $shippingaddress->cust_s_country)
                                                    <option value="{{ $country->country_name }}">
                                                        {{ $country->country_name }}</option>
                                                @endif
                                            @endforeach



                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <textarea name="cust_s_address" class="form-control" cols="30" rows="10" style="height:100px;" required>{{ $shippingaddress ? $shippingaddress->cust_s_address : $customer->cust_address }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">City</label>
                                        <input type="text" class="form-control" name="cust_s_city"
                                            value="{{ $shippingaddress ? $shippingaddress->cust_s_city : $customer->cust_city }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">State</label>
                                        <input type="text" class="form-control" name="cust_s_state"
                                            value="{{ $shippingaddress ? $shippingaddress->cust_s_state : $customer->cust_state }}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Zip Code</label>
                                        <input type="text" class="form-control" name="cust_s_zip"
                                            value="{{ $shippingaddress ? $shippingaddress->cust_s_zip : $customer->cust_zip }}"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Update" name="form1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

    <!-- ********************** end cotnent ********************** -->
@endsection

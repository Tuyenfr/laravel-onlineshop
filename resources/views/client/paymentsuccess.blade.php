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
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">
                        Your payment is successful !
                    </h4>
                    <p class="text-center">
                        <a href="{{ url('dashboard') }}" class="btn btn-success">Return back to Dashboard</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

    <!-- ********************** end content ********************** -->
@endsection

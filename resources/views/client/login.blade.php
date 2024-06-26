@extends('client_layout.master')

@section('title')
    Login
@endsection

@section('content')
    <!-- ********************** start content ********************** -->

    <!-- fetching row banner login -->
    <!-- login form -->
    <!-- start banner -->
    <div class="page-banner"
        style="background-color:#444;background-image: url({{ asset('frontend/assets/uploads/banner_login.jpg') }});">
        <div class="inner">
            <h1>Customer Login</h1>
        </div>
    </div>
    <!-- end banner -->

    <!-- start page content -->
    <div class="page">
        <div class="container">

            @if (Session::has('error'))
                <section class="content" style="min-height:auto;margin-bottom: -30px;">

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="alert alert-danger">
                                <p class="text-center">{{ Session::get('error') }}</p>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="user-content">
                        <form action="{{ url('connect') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Email Address *</label>
                                        <input type="email" class="form-control" name="cust_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password *</label>
                                        <input type="password" class="form-control" name="cust_password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="submit" class="btn btn-success" value="Submit" name="form1">
                                    </div>
                                    <a href="forget-password.php" style="color:#e4144d;">Forget Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

    <!-- ********************** end content ********************** -->
@endsection

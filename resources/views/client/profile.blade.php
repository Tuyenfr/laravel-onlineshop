@extends('client_layout.master')

@section('title')
    Profile
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
                                    <p class="text-center">{{ Session::get('status') }}</p>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

                <div class="col-md-12">
                    <div class="user-content">
                        <h3>
                            Update Profile
                        </h3>
                        <form action="{{ url('updateprofile', [$customer->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="">Full Name *</label>
                                    <input type="text" class="form-control" name="cust_name"
                                        value="{{ $customer->cust_name }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Company Name</label>
                                    <input type="text" class="form-control" name="cust_cname"
                                        value="{{ $customer->cust_cname }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Email Address *</label>
                                    <input type="text" class="form-control" name=""
                                        value="{{ $customer->cust_email }}" disabled>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Phone Number *</label>
                                    <input type="text" class="form-control" name="cust_phone"
                                        value="{{ $customer->cust_phone }}" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="">Address *</label>
                                    <textarea name="cust_address" class="form-control" cols="30" rows="10" style="height:70px;" required>{{ $customer->cust_address }}</textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Country *</label>
                                    <select name="cust_country" class="form-control" required>
                                        <option value="{{ $customer->cust_country }}">{{ $customer->cust_country }}</option>
                                        @foreach ($countries as $country)
                                            @if ($country->country_name !== $customer->cust_country)
                                                <option value="{{ $country->country_name }}">{{ $country->country_name }}
                                                </option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">City *</label>
                                    <input type="text" class="form-control" name="cust_city"
                                        value="{{ $customer->cust_city }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">State *</label>
                                    <input type="text" class="form-control" name="cust_state"
                                        value="{{ $customer->cust_state }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Zip Code *</label>
                                    <input type="text" class="form-control" name="cust_zip"
                                        value="{{ $customer->cust_zip }}" required>
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

    <!-- ********************** end content ********************** -->
@endsection

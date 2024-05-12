@extends('client_layout.master')

@section('title')
    Dashboard
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
                <div class="col-md-12">
                    <div class="user-content">
                        <h3 class="text-center">
                            Welcome to the Dashboard
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
    <!-- ********************** end content ********************** -->
@endsection

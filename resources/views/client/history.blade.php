@extends('client_layout.master')

@section('title')
    Customer history
@endsection

@section('content')
    <!-- ********************** start content ********************** -->

    <!-- start page cpntent -->
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
                        <h3>Order History</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Details</th>
                                        <th>Payment Date and Time</th>
                                        <th>Transaction ID</th>
                                        <th>Paid Amount</th>
                                        <th>Payment Status</th>
                                        <th>Payment Method</th>
                                        <th>Payment ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div class="pagination" style="overflow: hidden;">
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

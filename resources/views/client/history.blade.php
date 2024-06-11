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
                                    
                                    @foreach ($orders as $order)
                                    
                                    <tr>
                                        <td>{{$increment++}}</td>
                                        <td>
                                            @foreach ($order->cust_order->items as $item)
                                                <b>Product:</b> {{ $item['product_name'] }}
                                                HDD<br>(<b>Size:</b> {{ $item['size'] }}, <b>Color:</b>
                                                {{ $item['color'] }} )<br>(<b>Quantity:</b> {{ $item['qty'] }},
                                                <b>Unit
                                                    Price:</b> {{ $item['product_price'] }} )<br><br>
                                            @endforeach
                                        </td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->cust_transactionid}}</td>
                                        <td>{{$order->cust_paidamount}}</td>
                                        <td>{{$order->cust_paymentstatus}}</td>
                                        <td>{{$order->cust_paymentmethod}}</td>
                                        <td>{{$order->cust_paymentid}}</td>

                                    </tr>

                                    @endforeach


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

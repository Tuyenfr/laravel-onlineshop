@extends('admin_layout.master')

@section('title')
    Order Management
@endsection

@section('content')
    <!-- start content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="content-header-left">
                <h1>View Orders</h1>
            </div>
        </section>

        @if (Session::has('status'))
            <section class="content" style="min-height:auto;margin-bottom: -30px;">

                <div class="row">
                    <div class="col-md-12">
                        <div class="callout callout-success">
                            <p>{{ Session::get('status') }}</p>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Product Details</th>
                                        <th>
                                            Payment Information
                                        </th>
                                        <th>Paid Amount</th>
                                        <th>Payment Status</th>
                                        <th>Shipping Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="bg-g">
                                            <td>{{ $increment++ }}</td>
                                            <td>
                                                <b>Id:</b>{{ $order->id }}<br>
                                                <b>Name:</b><br>{{ $order->cust_name }}<br>
                                                <b>Email:</b><br>{{ $order->cust_email }}<br><br>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#model-".{{ $increment }} class="btn btn-warning btn-xs"
                                                    style="width:100%;margin-bottom:4px;">Send Message</a>
                                                <div id="model-".{{ $increment }} class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title" style="font-weight: bold;">Send
                                                                    Message
                                                                </h4>
                                                            </div>
                                                            <div class="modal-body" style="font-size: 14px">
                                                                <form action="" method="post">
                                                                    <input type="hidden" name="cust_id" value="10">
                                                                    <input type="hidden" name="payment_id"
                                                                        value="1647800902">
                                                                    <table class="table table-bordered">
                                                                        <tr>
                                                                            <td>Subject</td>
                                                                            <td>
                                                                                <input type="text" name="subject_text"
                                                                                    class="form-control"
                                                                                    style="width: 100%;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Message</td>
                                                                            <td>
                                                                                <textarea name="message_text" class="form-control" cols="30" rows="10" style="width:100%;height: 200px;"></textarea>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td><input type="submit" value="Send Message"
                                                                                    name="form1"></td>
                                                                        </tr>
                                                                    </table>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @foreach ($order->cust_order->items as $item)
                                                    <b>Product:</b> {{ $item['product_name'] }}
                                                    HDD<br>(<b>Size:</b> {{ $item['size'] }}, <b>Color:</b>
                                                    {{ $item['color'] }} )<br>(<b>Quantity:</b> {{ $item['qty'] }},
                                                    <b>Unit
                                                        Price:</b> {{ $item['product_price'] }} )<br><br>
                                                @endforeach

                                            </td>
                                            <td>
                                                <b>Payment Method:</b> <span
                                                    style="color:red;"><b>{{ $order->cust_paymentmethod }}</b></span><br>
                                                <b>Payment Id:</b> {{ $order->cust_paymentid }} <br>
                                                <b>Date:</b> {{ $order->created_at }}<br>
                                                <b>Transaction Information:</b> <br>Transaction Id:
                                                {{ $order->cust_transactionid }}
                                                Transaction Date: {{ $order->created_at }}<br>
                                            </td>
                                            <td>{{ $order->cust_paidamount }}</td>
                                            <td>
                                                @if ($order->cust_paymentstatus == 1)
                                                    Completed <br><br>
                                                @else
                                                    <form action="{{ url('completepaymentstatus', [$order->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="submit" class="btn btn-warning btn-xs"
                                                            style="width: 100%; margin-bottom: 4px" value="Mark Complete">
                                                    </form>
                                                @endif

                                            </td>
                                            <td>
                                                @if ($order->cust_shippingstatus == 1)
                                                    Completed <br><br>
                                                @else
                                                    <form action="{{ url('completeshippingstatus', [$order->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="submit" class="btn btn-warning btn-xs"
                                                            style="width: 100%; margin-bottom: 4px" value="Mark Complete">
                                                    </form>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ url('deleteorder', [$order->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="btn btn-danger btn-xs"
                                                        style="width: 100%; margin-bottom: 4px" value="Delete">
                                                </form>
                                                {{-- <a href="#" class="btn btn-danger btn-xs"
                                                data-href="order-delete.php?id=55" data-toggle="modal"
                                                data-target="#confirm-delete" style="width:100%;">Delete</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
        </section>
        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        Sure you want to delete this item?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger btn-ok">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
@endsection

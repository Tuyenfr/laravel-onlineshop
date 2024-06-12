@extends('admin_layout.master')

@section('title')
    Registered customer
@endsection

@section('content')
    <!-- start content -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="content-header-left">
                <h1>View Customers</h1>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-body table-responsive">
                            <table id="example1" class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th width="180">Name</th>
                                        <th width="150">Email Address</th>
                                        <th width="180">Country, City, State</th>
                                        <th>Status</th>
                                        <th width="100">Change Status</th>
                                        <th width="100">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                    @if ($customer->status == 1)
                                        <tr class="bg-g">
                                    @else
                                        <tr class="bg-r">
                                    @endif
                                    
                                        <td>{{$increment++}}</td>
                                        <td>{{$customer->cust_name}}</td>
                                        <td>{{$customer->cust_email}}</td>
                                        <td>
                                            {{$customer->cust_country}}<br>
                                            {{$customer->cust_city}}<br>
                                            {{$customer->cust_state}}
                                        </td>
                                        <td>{{$customer->status == 1 ? "Active" : "Inactive"}}
                                        </td>
        
                                        <td>
                                                <form action="{{url('changecustomerstatus', [$customer->id])}}" method="post">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="submit" class="btn btn-success btn-xs" value="Change Status">
                                                </form>
                                        </td>
                                        <td>
                                            <form action="{{url('deletecustomer', [$customer->id])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger btn-xs" value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                        <p>Are you sure want to delete this item?</p>
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

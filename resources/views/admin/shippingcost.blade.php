
@extends('admin_layout.master')

@section('title')

Shipping cost

@endsection

@section('content')

	  <!-- start content -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>Add Shipping Cost</h1>
         </div>
      </section>
      @if(Session::has('status'))
         
      <section class="content" style="min-height:auto;margin-bottom: -30px;">
   
         <div class="row">
            <div class="col-md-12">
               <div class="callout callout-success">
                  <p>{{Session::get('status')}}</p>
               </div>
            </div>
         </div>
      </section>
      @endif
      <section class="content">
         <div class="row">
            <div class="col-md-12">
               <form class="form-horizontal" action="{{url('admin/saveshippingcost', [])}}" method="post">
                  @csrf
                  <div class="box box-info">
                     <div class="box-body">
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label">Select Country <span>*</span></label>
                           <div class="col-sm-4">
                              <select name="country_id" class="form-control select2" required>
                                 <option value="">Select a country</option>
                                 @foreach($countries as $country)
                                 <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label">Amount <span>*</span></label>
                           <div class="col-sm-4">
                              <input type="number" class="form-control" name="amount" required>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label"></label>
                           <div class="col-sm-6">
                              <button type="submit" class="btn btn-success pull-left" name="form1">Add</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <section class="content-header">
         <div class="content-header-left">
            <h1>View Shipping Costs</h1>
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
                              <th>#</th>
                              <th>Country Name</th>
                              <th>Country Amount</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($shippingcosts as $shippingcost)
                           <tr>
                              <td>{{$shippingcost->id}}</td>
                              <td>{{$shippingcost->country_id}}</td>
                              <td>{{$shippingcost->amount}}</td>
                              <td style="display: flex">
                                 <a href="{{url('admin/editshippingcost', [$shippingcost->id])}}" class="btn btn-primary btn-xs">Edit</a>
                                 <form action="{{url('admin/deleteshippingcost', [$shippingcost->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-xs" style="margin-left: 5px" value="Delete">
                                 </form>
                              </td>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
               <h4 style="background: #dd4b39;color:#fff;padding:10px 20px;">NB: If a country does not exist in the above list, the following "Rest of the World" shipping cost will be applied upon that.</h4>
      </section>
      <section class="content-header">
      <div class="content-header-left">
      <h1>Shipping Cost (Rest of the world)</h1>
      </div>
      </section>
      <section class="content">
      <div class="row">
      <div class="col-md-12">
      <form class="form-horizontal" action="" method="post">
      <div class="box box-info">
      <div class="box-body">
      <div class="form-group">
      <label for="" class="col-sm-2 control-label">Amount <span>*</span></label>
      <div class="col-sm-4">
      <input type="text" class="form-control" name="amount" value="100">
      </div>
      </div>
      <div class="form-group">
      <label for="" class="col-sm-2 control-label"></label>
      <div class="col-sm-6">
      <button type="submit" class="btn btn-success pull-left" name="form2">Update</button>
      </div>
      </div>
      </div>
      </div>
      </form>
      </div>
      </div>
      </section>
      <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <div class="modal-body">
      Are you sure want to delete this item?
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
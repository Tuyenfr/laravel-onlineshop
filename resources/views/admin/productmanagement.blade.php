
@extends('admin_layout.master')

@section('title')

Product Management

@endsection

@section('content')

	<!-- start content -->
  <div class="content-wrapper">
    <section class="content-header">
       <div class="content-header-left">
          <h1>View Products</h1>
       </div>
       <div class="content-header-right">
          <a href="{{url('admin/addproduct')}}" class="btn btn-primary btn-sm">Add Product</a>
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
             <div class="box box-info">
                <div class="box-body table-responsive">
                   <table id="example1" class="table table-bordered table-hover table-striped">
                      <thead class="thead-dark">
                         <tr>
                            <th width="10">#</th>
                            <th>Photo</th>
                            <th width="160">Product Name</th>
                            <th width="60">Old Price</th>
                            <th width="60">(C) Price</th>
                            <th width="60">Quantity</th>
                            <th>Featured?</th>
                            <th>Active?</th>
                            <th>Category</th>
                            <th width="80">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                         <tr>
                            <td>{{$increment++}}</td>
                            <td style="width:82px;"><img src="{{asset('storage/productimages/'.$product->p_featured_photo)}}" alt="{{$product->p_description}}" style="width:80px;"></td>
                            <td>{{$product->p_name}}</td>
                            <td>${{$product->p_old_price}}</td>
                            <td>${{$product->p_current_price}}</td>
                            <td>{{$product->p_qty}}</td>

                            @if($product->p_is_featured == 1)
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>
                            </td>
               
                            @else
                            <td>
                              <span class="badge badge-success" style="background-color:red;">No</span>
                           </td>
                            @endif

                            @if($product->p_is_active == 1)
                            <td>
                               <span class="badge badge-success" style="background-color:green;">Yes</span>                           </td>
               
                            @else
                            <td>
                              <span class="badge badge-success" style="background-color:red;">No</span>
                           </td>
                            @endif
                     
                            <td>{{$product->tcat_id}}<br>{{$product->mcat_id}}<br>{{$product->ecat_id}}</td>
                            <td style="display: flex">
                               <a href="{{url('admin/editproduct', [$product->id])}}" class="btn btn-primary btn-xs">Edit</a>
                               <form action="{{url('admin/deleteproduct', [$product->id])}}" method="post">
                                 @csrf
                                 @method('DELETE')
                               <input type="submit" class="btn btn-danger btn-xs" style="margin-left: 5px" value="Delete">
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
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
             </div>
             <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
                <p style="color:red;">Be careful! This product will be deleted from the order table, payment table, size table, color table and rating table also.</p>
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
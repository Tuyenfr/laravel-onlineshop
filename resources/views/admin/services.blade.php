
@extends('admin_layout.master')

@section('title')

Services

@endsection

@section('content')

	<!-- start content -->
  <div class="content-wrapper">
    <section class="content-header">
       <div class="content-header-left">
          <h1>View Services</h1>
       </div>
       <div class="content-header-right">
          <a href="{{ url('admin/addservices')}}" class="btn btn-primary btn-sm">Add Service</a>
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
                            <th width="30">#</th>
                            <th>Photo</th>
                            <th width="100">Title</th>
                            <th>Content</th>
                            <th width="80">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td style="width:130px;"><img src="{{asset('backend/uploads/service-5.png')}}" alt="Easy Returns" style="width:120px;"></td>
                            <td>Easy Returns</td>
                            <td>Return any item before 15 days!</td>
                            <td>										
                               <a href="service-edit.php?id=5" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="service-delete.php?id=5" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td style="width:130px;"><img src="{{asset('backend/uploads/service-6.png')}}" alt="Free Shipping" style="width:120px;"></td>
                            <td>Free Shipping</td>
                            <td>Enjoy free shipping inside US.</td>
                            <td>										
                               <a href="service-edit.php?id=6" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="service-delete.php?id=6" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td style="width:130px;"><img src="{{asset('backend/uploads/service-7.png')}}" alt="Fast Shipping" style="width:120px;"></td>
                            <td>Fast Shipping</td>
                            <td>Items are shipped within 24 hours.</td>
                            <td>										
                               <a href="service-edit.php?id=7" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="service-delete.php?id=7" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>4</td>
                            <td style="width:130px;"><img src="{{asset('backend/uploads/service-8.png')}}" alt="Satisfaction Guarantee" style="width:120px;"></td>
                            <td>Satisfaction Guarantee</td>
                            <td>We guarantee you with our quality satisfaction.</td>
                            <td>										
                               <a href="service-edit.php?id=8" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="service-delete.php?id=8" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>5</td>
                            <td style="width:130px;"><img src="{{asset('backend/uploads/service-9.png')}}" alt="Secure Checkout" style="width:120px;"></td>
                            <td>Secure Checkout</td>
                            <td>Providing Secure Checkout Options for all</td>
                            <td>										
                               <a href="service-edit.php?id=9" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="service-delete.php?id=9" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
                         <tr>
                            <td>6</td>
                            <td style="width:130px;"><img src="{{asset('backend/uploads/service-10.png')}}" alt="Money Back Guarantee" style="width:120px;"></td>
                            <td>Money Back Guarantee</td>
                            <td>Offer money back guarantee on our products</td>
                            <td>										
                               <a href="service-edit.php?id=10" class="btn btn-primary btn-xs">Edit</a>
                               <a href="#" class="btn btn-danger btn-xs" data-href="service-delete.php?id=10" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                            </td>
                         </tr>
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
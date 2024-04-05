
@extends('admin_layout.master')

@section('title')

Manage sliders

@endsection

@section('content')

<!-- start content -->
<div class="content-wrapper">
  <section class="content-header">
     <div class="content-header-left">
        <h1>View Sliders</h1>
     </div>
     <div class="content-header-right">
        <a href="slider-add.php" class="btn btn-primary btn-sm">Add Slider</a>
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
                          <th>Photo</th>
                          <th>Heading</th>
                          <th>Content</th>
                          <th>Button Text</th>
                          <th>Button URL</th>
                          <th>Position</th>
                          <th width="140">Action</th>
                       </tr>
                    </thead>
                    <tbody>
                       <tr>
                          <td>1</td>
                          <td style="width:150px;"><img src="{{asset('backend/uploads/slider-1.png')}}" alt="Welcome to Ecommerce PHP" style="width:140px;"></td>
                          <td>Welcome to Ecommerce PHP</td>
                          <td>Shop Online for Latest Women Accessories</td>
                          <td>View Women Accessories</td>
                          <td>product-category.php?id=4&type=mid-category</td>
                          <td>Center</td>
                          <td>										
                             <a href="slider-edit.php?id=1" class="btn btn-primary btn-xs">Edit</a>
                             <a href="#" class="btn btn-danger btn-xs" data-href="slider-delete.php?id=1" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                          </td>
                       </tr>
                       <tr>
                          <td>2</td>
                          <td style="width:150px;"><img src="{{asset('backend/uploads/slider-2.jpg')}}" alt="50% Discount on All Products" style="width:140px;"></td>
                          <td>50% Discount on All Products</td>
                          <td>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</td>
                          <td>Read More</td>
                          <td>#</td>
                          <td>Center</td>
                          <td>										
                             <a href="slider-edit.php?id=2" class="btn btn-primary btn-xs">Edit</a>
                             <a href="#" class="btn btn-danger btn-xs" data-href="slider-delete.php?id=2" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
                          </td>
                       </tr>
                       <tr>
                          <td>3</td>
                          <td style="width:150px;"><img src="{{asset('backend/uploads/slider-3.png')}}" alt="24 Hours Customer Support" style="width:140px;"></td>
                          <td>24 Hours Customer Support</td>
                          <td>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</td>
                          <td>Read More</td>
                          <td>#</td>
                          <td>Right</td>
                          <td>										
                             <a href="slider-edit.php?id=3" class="btn btn-primary btn-xs">Edit</a>
                             <a href="#" class="btn btn-danger btn-xs" data-href="slider-delete.php?id=3" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
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
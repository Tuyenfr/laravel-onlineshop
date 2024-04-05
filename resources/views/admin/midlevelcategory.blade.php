
@extends('admin_layout.master')

@section('title')

Mid level category

@endsection

@section('content')

	  <!-- start content -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>View Mid Level Categories</h1>
         </div>
         <div class="content-header-right">
            <a href="{{ url('admin/addmidlevelcategory')}}" class="btn btn-primary btn-sm">Add New</a>
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
                              <th>Mid Level Category Name</th>
                              <th>Top Level Category Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Household</td>
                              <td>Health and Household</td>
                              <td>
                                 <a href="mid-category-edit.php?id=17" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=17" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Health</td>
                              <td>Health and Household</td>
                              <td>
                                 <a href="mid-category-edit.php?id=16" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=16" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>Computers</td>
                              <td>Electronics</td>
                              <td>
                                 <a href="mid-category-edit.php?id=15" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=15" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Electronic Items</td>
                              <td>Electronics</td>
                              <td>
                                 <a href="mid-category-edit.php?id=14" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=14" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>5</td>
                              <td>Accessories</td>
                              <td>Kids</td>
                              <td>
                                 <a href="mid-category-edit.php?id=12" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=12" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>6</td>
                              <td>Shoes</td>
                              <td>Kids</td>
                              <td>
                                 <a href="mid-category-edit.php?id=11" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=11" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>7</td>
                              <td>Clothing</td>
                              <td>Kids</td>
                              <td>
                                 <a href="mid-category-edit.php?id=10" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=10" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>8</td>
                              <td>T-shirts & Shirts</td>
                              <td>Men</td>
                              <td>
                                 <a href="mid-category-edit.php?id=9" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=9" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>9</td>
                              <td>Bottoms</td>
                              <td>Men</td>
                              <td>
                                 <a href="mid-category-edit.php?id=8" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=8" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>10</td>
                              <td>Clothing</td>
                              <td>Women</td>
                              <td>
                                 <a href="mid-category-edit.php?id=7" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=7" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>11</td>
                              <td>Shoes</td>
                              <td>Women</td>
                              <td>
                                 <a href="mid-category-edit.php?id=6" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=6" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>12</td>
                              <td>Accessories</td>
                              <td>Women</td>
                              <td>
                                 <a href="mid-category-edit.php?id=4" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=4" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>13</td>
                              <td>Beauty Products</td>
                              <td>Women</td>
                              <td>
                                 <a href="mid-category-edit.php?id=3" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=3" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>14</td>
                              <td>Men's Shoes</td>
                              <td>Men</td>
                              <td>
                                 <a href="mid-category-edit.php?id=2" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=2" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                           <tr>
                              <td>15</td>
                              <td>Men Accessories</td>
                              <td>Men</td>
                              <td>
                                 <a href="mid-category-edit.php?id=1" class="btn btn-primary btn-xs">Edit</a>
                                 <a href="#" class="btn btn-danger btn-xs" data-href="mid-category-delete.php?id=1" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                              </td>
                           </tr>
                        </tbody>
                     </table>
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
      <p style="color:red;">Be careful! All products and end level categories under this mid level category will be deleted from all the tables like order table, payment table, size table, color table, rating table etc.</p>
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
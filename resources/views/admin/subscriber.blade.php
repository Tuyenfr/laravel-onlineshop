
@extends('admin_layout.master')

@section('title')

Subscriber

@endsection

@section('content')

	  <!-- start content -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>Subscriber</h1>
         </div>
         <div class="content-header-right">
            <a href="subscriber-remove.php" class="btn btn-primary btn-sm">Remove Pending Subscribers</a>
            <a href="subscriber-csv.php" class="btn btn-primary btn-sm">Export as CSV</a>
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
                              <th>Subscriber Email</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>ruth@mail.com</td>
                              <td><a href="#" class="btn btn-danger btn-xs" data-href="subscriber-delete.php?id=1" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>kimberly@mail.com</td>
                              <td><a href="#" class="btn btn-danger btn-xs" data-href="subscriber-delete.php?id=2" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>gregobn@mail.com</td>
                              <td><a href="#" class="btn btn-danger btn-xs" data-href="subscriber-delete.php?id=3" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>morgan.sarahh5@mail.com</td>
                              <td><a href="#" class="btn btn-danger btn-xs" data-href="subscriber-delete.php?id=4" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
                           </tr>
                           <tr>
                              <td>5</td>
                              <td>greenwd1154@mail.com</td>
                              <td><a href="#" class="btn btn-danger btn-xs" data-href="subscriber-delete.php?id=5" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
                           </tr>
                           <tr>
                              <td>6</td>
                              <td>awsm785@mail.com</td>
                              <td><a href="#" class="btn btn-danger btn-xs" data-href="subscriber-delete.php?id=6" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
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
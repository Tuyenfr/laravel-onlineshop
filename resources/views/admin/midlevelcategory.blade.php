
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
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Mid Level Category Name</th>
                              <th>Top Level Category Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($midlevelcategories as $midlevelcategory)
                           <tr>
                              <td>{{$increment++}}</td>
                              <td>{{$midlevelcategory->mcat_name}}</td>
                              <td>{{$midlevelcategory->tcat_id}}</td>
                              <td style="display: flex">
                                 <a href="{{url('admin/editmidlevelcategory', [$midlevelcategory->id])}}" class="btn btn-primary btn-xs">Edit</a>
                                 <form action="{{url('admin/deletemidlevelcategory', [$midlevelcategory->id])}}" method="post">
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
@extends('admin_layout.master')

@section('title')
Size
@endsection

@section('content')
   <!-- start content -->
   <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>View Sizes</h1>
         </div>
         <div class="content-header-right">
            <a href="{{ url('admin/addsize')}}" class="btn btn-primary btn-sm">Add New</a>
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
                              <th>Size Name</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($sizes as $size)
                           <tr>
                           
                              <td>{{$increment++}}</td>
                              <td>{{$size->size_name}}</td>

                              <td style="display: flex;">
                                 <a href="{{ url('admin/editsize', [$size->id])}}" class="btn btn-primary btn-xs">Edit</a>
                                 <form action="{{url('admin/deletesize', [$size->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-xs" style="margin-left: 5px;" value='Delete'>
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
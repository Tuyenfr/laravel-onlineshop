
@extends('admin_layout.master')

@section('title')

Edit size

@endsection

@section('content')

		<!-- start content -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>Edit Size</h1>
         </div>
         <div class="content-header-right">
            <a href="{{url('admin/size')}}" class="btn btn-primary btn-sm">View All</a>
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
               <form class="form-horizontal" action="{{url('admin/updatesize', [$size->id])}}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="box box-info">
                     <div class="box-body">
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label">Size Name <span>*</span></label>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" name="size_name" value="{{$size->size_name}}">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label"></label>
                           <div class="col-sm-6">
                              <button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
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

@extends('admin_layout.master')

@section('title')

Edit end level category

@endsection

@section('content')

	 <!-- start content -->
   <div class="content-wrapper">
    <section class="content-header">
       <div class="content-header-left">
          <h1>Edit End Level Category</h1>
       </div>
       <div class="content-header-right">
          <a href="{{url('admin/endlevelcategory')}}" class="btn btn-primary btn-sm">View All</a>
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
             <form class="form-horizontal" action="{{url('admin/updateendlevelcategory', [$endlevelcategory->id])}}" method="post">
               @csrf
               @method('PUT')
                  <div class="box box-info">
                   <div class="box-body">
                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Top Level Category Name <span>*</span></label>
                         <div class="col-sm-4">
                            <select name="tcat_id" class="form-control select2 top-cat" required>
                               <option value="" selected>{{$endlevelcategory->tcat_id}}</option>
                               @foreach($toplevelcategories as $toplevelcategory)
                               <option value="{{$toplevelcategory->tcat_name}}">{{$toplevelcategory->tcat_name}}</option>
                               @endforeach
                            </select>
                         </div>
                      </div>
                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Mid Level Category Name <span>*</span></label>
                         <div class="col-sm-4">
                            <select name="mcat_id" class="form-control select2 mid-cat" required>
                               <option value="" selected>{{$endlevelcategory->mcat_id}}</option>
                               @foreach($midlevelcategories as $midlevelcategory)
                               <option value="{{$midlevelcategory->mcat_name}}">{{$midlevelcategory->mcat_name}}</option>
                               @endforeach
                            </select>
                         </div>
                      </div>
                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">End Level Category Name <span>*</span></label>
                         <div class="col-sm-4">
                            <input type="text" class="form-control" name="ecat_name" value="{{$endlevelcategory->ecat_name}}" required>
                         </div>
                      </div>
                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label"></label>
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
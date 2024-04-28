
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
                            <th width="30">#</th>
                            <th>Photo</th>
                            <th width="100">Title</th>
                            <th>Content</th>
                            <th width="80">Action</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($services as $service)
                         <tr>
                            <td>{{$increment++}}</td>
                            <td style="width:130px;"><img src="{{asset('storage/serviceimages/'.$service->photo)}}" alt="Easy Returns" style="width:120px;"></td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->content}}</td>
                            <td style="display: flex">										
                               <a href="{{url('admin/editservices', [$service->id])}}" class="btn btn-primary btn-xs">Edit</a>
                               <form action="{{url('admin/deleteservices', [$service->id])}}", method="post">
                                 @csrf
                                 @method('DELETE')
                               <input type="submit"class="btn btn-danger btn-xs" value="Delete" style="margin-left: 5px">                              </form>
                              </td>
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
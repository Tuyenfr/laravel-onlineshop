
@extends('admin_layout.master')

@section('title')

Add mid level category

@endsection

@section('content')

		 <!-- start content -->
     <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>Add Mid Level Category</h1>
         </div>
         <div class="content-header-right">
            <a href="{{url('admin/midlevelcategory')}}" class="btn btn-primary btn-sm">View All</a>
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
               <form class="form-horizontal" action="{{url('admin/savemidlevelcategory')}}" method="post">
                  @csrf
                  <div class="box box-info">
                     <div class="box-body">
                        <div class="form-group">
                           <label for="" class="col-sm-3 control-label">Top Level Category Name <span>*</span></label>
                           <div class="col-sm-4">
                              <select name="tcat_id" class="form-control select2">
                                 <option value="">Select Top Level Category</option>
                                 @foreach ($toplevelcategories as $toplevelcategory)
                                 <option value="{{$toplevelcategory->tcat_name}}">{{$toplevelcategory->tcat_name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="col-sm-3 control-label">Mid Level Category Name <span>*</span></label>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" name="mcat_name">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="col-sm-3 control-label"></label>
                           <div class="col-sm-6">
                              <button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
   </div>
<!-- end content -->

@endsection
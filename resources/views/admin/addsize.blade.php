
@extends('admin_layout.master')

@section('title')

Add size

@endsection

@section('content')

		 <!-- start content -->
     <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>Add Size</h1>
         </div>
         <div class="content-header-right">
            <a href="size.php" class="btn btn-primary btn-sm">View All</a>
         </div>
      </section>
      <section class="content">
         <div class="row">
            <div class="col-md-12">
               <form class="form-horizontal" action="" method="post">
                  <div class="box box-info">
                     <div class="box-body">
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label">Size Name <span>*</span></label>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" name="size_name">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label"></label>
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
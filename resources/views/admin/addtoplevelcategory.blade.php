
@extends('admin_layout.master')

@section('title')

Add top level category

@endsection

@section('content')

		 <!-- start content -->
     <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>Add Top Level Category</h1>
         </div>
         <div class="content-header-right">
            <a href="top-category.php" class="btn btn-primary btn-sm">View All</a>
         </div>
      </section>
      <section class="content">
         <div class="row">
            <div class="col-md-12">
               <form class="form-horizontal" action="" method="post">
                  <div class="box box-info">
                     <div class="box-body">
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label">Top Category Name <span>*</span></label>
                           <div class="col-sm-4">
                              <input type="text" class="form-control" name="tcat_name">
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="" class="col-sm-2 control-label">Show on Menu? <span>*</span></label>
                           <div class="col-sm-4">
                              <select name="show_on_menu" class="form-control" style="width:auto;">
                                 <option value="0">No</option>
                                 <option value="1">Yes</option>
                              </select>
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

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
            <a href="mid-category.php" class="btn btn-primary btn-sm">View All</a>
         </div>
      </section>
      <section class="content">
         <div class="row">
            <div class="col-md-12">
               <form class="form-horizontal" action="" method="post">
                  <div class="box box-info">
                     <div class="box-body">
                        <div class="form-group">
                           <label for="" class="col-sm-3 control-label">Top Level Category Name <span>*</span></label>
                           <div class="col-sm-4">
                              <select name="tcat_id" class="form-control select2">
                                 <option value="">Select Top Level Category</option>
                                 <option value="4">Electronics</option>
                                 <option value="5">Health and Household</option>
                                 <option value="3">Kids</option>
                                 <option value="1">Men</option>
                                 <option value="2">Women</option>
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
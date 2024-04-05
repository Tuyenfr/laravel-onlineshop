
@extends('client_layout.master')

@section('title')

Login

@endsection

@section('content')

    <!-- ********************** start content ********************** -->

	  <!-- fetching row banner login -->
      <!-- login form -->
	  <!-- start banner -->
    <div class="page-banner" style="background-color:#444;background-image: url({{asset('frontend/assets/uploads/banner_login.jpg')}});">
      <div class="inner">
         <h1>Customer Login</h1>
      </div>
   </div>
 <!-- end banner -->

 <!-- start page content -->
   <div class="page">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="user-content">
                  <form action="" method="post">
                     <input type="hidden" name="_csrf" value="305e2e05d29f55b50a14ad09db8b623c" />                  
                     <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="">Email Address *</label>
                              <input type="email" class="form-control" name="cust_email">
                           </div>
                           <div class="form-group">
                              <label for="">Password *</label>
                              <input type="password" class="form-control" name="cust_password">
                           </div>
                           <div class="form-group">
                              <label for=""></label>
                              <input type="submit" class="btn btn-success" value="Submit" name="form1">
                           </div>
                           <a href="forget-password.php" style="color:#e4144d;">Forget Password?</a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
 <!-- end page content -->

 <!-- ********************** end content ********************** -->

@endsection
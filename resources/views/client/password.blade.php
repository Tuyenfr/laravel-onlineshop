
@extends('client_layout.master')

@section('title')

Update Password

@endsection

@section('content')

	  <!-- start page content -->
    <div class="page">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="user-sidebar">
                              
                     @Include ('client_layout.dashboardheader')
                  
               </div>
            </div>

            @if(Session::has('status'))
            <section class="content" style="min-height:auto;margin-bottom: -30px;">        
               <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                     <div class="alert alert-success">
                        <p>{{Session::get('status')}}</p>
                     </div>
                  </div>
               </div>
            </section>
            @endif

            <div class="col-md-12">
               <div class="user-content">
                  <h3 class="text-center">
                     Update Password
                  </h3>
                  <form action="{{url('updatepassword', [Session::get('customer')->id])}}" method="post">
                     @csrf
                     @method('PUT')
                     <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="">New Password *</label>
                              <input type="password" class="form-control" name="cust_password" id="password" required>
                           </div>
                           <div class="form-group">
                              <label for="">Retype New Password *</label>
                              <input type="password" class="form-control" name="cust_password_confirmation" oninput="check(this)">
                           </div>
                           <input type="submit" class="btn btn-primary" value="Update" name="form1">
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
 <!-- end page content -->

@endsection
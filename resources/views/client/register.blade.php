
@extends('client_layout.master')

@section('title')

Register

@endsection

@section('content')

    <!-- ********************** start content ********************** -->

      <!-- start banner -->
      <div class="page-banner" style="background-color:#444;background-image: url({{asset('frontend/assets/uploads/banner_registration.jpg')}});">
        <div class="inner">
           <h1>Customer Registration</h1>
        </div>
     </div>
     <!-- end banner -->

     <!-- start page content -->
     <div class="page">
        <div class="container">

         @if(Session::has('status'))
          
         <section class="content" style="min-height:auto;margin-bottom: -30px;">
        
            <div class="row">
               <div class="col-md-10 col-md-offset-1">
                  <div class="alert alert-success">
                     <p>{{Session::get('status')}}</p>
                  </div>
               </div>
            </div>
         </section>
       
         @endif
           <div class="row">
              <div class="col-md-12">
                 <div class="user-content">
                    <form action="{{url('registercustomer')}}" method="post">
                     @csrf
                       <div class="row">
                          <div class="col-md-2"></div>
                          <div class="col-md-8">
                             <div class="col-md-6 form-group">
                                <label for="">Full Name *</label>
                                <input type="text" class="form-control" name="cust_name" value="" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" name="cust_cname" value="" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">Email Address *</label>
                                <input type="email" class="form-control" name="cust_email" value="" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">Phone Number *</label>
                                <input type="text" class="form-control" name="cust_phone" value="" required>
                             </div>
                             <div class="col-md-12 form-group">
                                <label for="">Address *</label>
                                <textarea name="cust_address" class="form-control" cols="30" rows="10" style="height:70px;" required></textarea>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">Country *</label>
                                <select name="cust_country" class="form-control select2" required>
                                   <option value="">Select country</option>
                                   @foreach($countries as $country)
                                   <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                   @endforeach
                                </select>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">City *</label>
                                <input type="text" class="form-control" name="cust_city" value="" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">State *</label>
                                <input type="text" class="form-control" name="cust_state" value="" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">Zip Code *</label>
                                <input type="text" class="form-control" name="cust_zip" value="" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">Password *</label>
                                <input type="password" class="form-control" name="cust_password" required>
                             </div>
                             <div class="col-md-6 form-group">
                                <label for="">Retype Password *</label>
                                <input type="password" class="form-control" name="cust_re_password">
                             </div>
                             <div class="col-md-6 form-group">
                                <label for=""></label>
                                <input type="submit" class="btn btn-danger" value="Register" name="form1">
                             </div>
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
@extends('admin_layout.master')

@section('title')
Web settings
@endsection

@section('content')
        <!-- start content -->
        <div class="content-wrapper">
          <section class="content-header">
             <div class="content-header-left">
                <h1>Website Settings</h1>
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
                   <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                         <li class="active"><a href="#tab_1" data-toggle="tab">Logo</a></li>
                         <li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
                         <li><a href="#tab_3" data-toggle="tab">Footer & Contact</a></li>
                         <li><a href="#tab_4" data-toggle="tab">Message Settings</a></li>
                         <li><a href="#tab_5" data-toggle="tab">Products</a></li>
                         <li><a href="#tab_6" data-toggle="tab">Home Settings</a></li>
                         <li><a href="#tab_7" data-toggle="tab">Banner Settings</a></li>
                         <li><a href="#tab_9" data-toggle="tab">Payment Settings</a></li>
                         <li><a href="#tab_10" data-toggle="tab">Head & Body Scripts</a></li>
                         <!--<li><a href="#tab_11" data-toggle="tab">Ads</a></li>-->
                      </ul>
                      <div class="tab-content">
                         <div class="tab-pane active" id="tab_1">
                            <form class="form-horizontal" action="{{$logo ? url('admin/updatelogo', [$logo->id]) : url('admin/savelogo')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              @if($logo)
                                 @method('PUT')
                              @endif

                              <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                          @if($logo)
                                           <img src="{{asset('storage/logo/'.$logo->photo_logo)}}" alt="{{$logo->photo_logo}}" class="existing-photo" style="height:80px;">                                         
                                          @else
                                          <img src="{{asset('storage/defaultimage/noimage.jpg')}}" alt="noimageforlogo" class="existing-photo" style="height:80px;">
                                          @endif
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                           <input type="file" name="photo_logo" required>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form1">{{$logo ? 'Update Logo' : 'Save Logo'}}</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="tab-pane" id="tab_2">
                              <form class="form-horizontal" action="{{$favicon ? url('admin/updatefavicon', [$favicon->id]) : url('admin/savefavicon')}}" method="post" enctype="multipart/form-data">
                              @csrf
                              @if($favicon)
                                 @method('PUT')
                              @endif
                            
                              <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                          @if($favicon)
                                          <img src="{{asset('storage/favicon/'.$favicon->photo_favicon)}}" alt="{{$favicon->photo_favicon}}" class="existing-photo" style="height:80px;">                                         
                                         @else
                                         <img src="{{asset('storage/defaultimage/noimage.jpg')}}" alt="noimageforlogo" class="existing-photo" style="height:80px;">
                                         @endif
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">New Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                           <input type="file" name="photo_favicon" required>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form2">{{$favicon ? 'Update Favicon' : 'Save Favicon'}}</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="tab-pane" id="tab_3">
                            <form class="form-horizontal" action="{{$information ? url('admin/updateinformation', [$information->id]) : url('admin/saveinformation')}}" method="post">
                              @csrf
                              @if($information)
                                 @method('PUT')
                              @endif
                                                           
                              <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Newsletter Section </label>
                                        <div class="col-sm-3">
                                           <select name="newsletter_on_off" class="form-control" style="width:auto;" required>
                                             @if ($information)
                                                                                       
                                                @if ($information->newsletter_on_off == "1")
                                                   <option value="1" selected>On</option>
                                                   <option value="0" >Off</option>
                                                @else
                                                   <option value="1" >On</option>
                                                   <option value="0" selected>Off</option> 
                                                @endif
                                             
                                             @else
                                                <option value="1" selected>On</option>
                                                <option value="0" >Off</option> 
                                             @endif
                                    
                                           </select>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer - Copyright </label>
                                        <div class="col-sm-9">
                                           <input class="form-control" type="text" name="footer_copyright" value="{{$information ? $information->footer_copyright : ""}}" required>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Contact Address </label>
                                        <div class="col-sm-6">
                                           <textarea class="form-control" name="contact_address" style="height:140px;" required>{{$information ? $information->contact_address : ""}}</textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Contact Email </label>
                                        <div class="col-sm-6">
                                           <input type="email" class="form-control" name="contact_email" value="{{$information ? $information->contact_email : ""}}" required>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Contact Phone Number </label>
                                        <div class="col-sm-6">
                                           <input type="number" class="form-control" name="contact_phone" value="{{$information ? $information->contact_phone : ""}}" required>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Contact Map iFrame </label>
                                        <div class="col-sm-9">
                                           <textarea class="form-control" name="contact_map_iframe" style="height:200px;" required> {{$information ? $information->contact_map_iframe : ""}} </textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form3">{{$information ? 'Update info' : 'Save info'}}</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="tab-pane" id="tab_4">
                            <form class="form-horizontal" action="" method="post">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Contact Email Address</label>
                                        <div class="col-sm-4">
                                           <input type="text" class="form-control" name="receive_email" value="support@ecommercephp.com">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Contact Email Subject</label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="receive_email_subject" value="Visitor Email Message from Ecommerce Site PHP">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Contact Email Thank you message</label>
                                        <div class="col-sm-8">
                                           <textarea class="form-control" name="receive_email_thank_you_message">Thank you for sending email. We will contact you shortly.</textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Forget password Message</label>
                                        <div class="col-sm-8">
                                           <textarea class="form-control" name="forget_password_message">A confirmation link is sent to your email address. You will get the password reset information in there.</textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-5">
                                           <button type="submit" class="btn btn-success pull-left" name="form4">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="tab-pane" id="tab_5">
                            <form class="form-horizontal" action="" method="post">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Home Page (How many featured product?)<span>*</span></label>
                                        <div class="col-sm-2">
                                           <input type="text" class="form-control" name="total_featured_product_home" value="5">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Home Page (How many latest product?)<span>*</span></label>
                                        <div class="col-sm-2">
                                           <input type="text" class="form-control" name="total_latest_product_home" value="6">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Home Page (How many popular product?)<span>*</span></label>
                                        <div class="col-sm-2">
                                           <input type="text" class="form-control" name="total_popular_product_home" value="8">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-4 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form5">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="tab-pane" id="tab_6">
                            <h3>Sections On and Off</h3>
                            <form class="form-horizontal" action="" method="post">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Service Section </label>
                                        <div class="col-sm-4">
                                           <select name="home_service_on_off" class="form-control" style="width:auto;">
                                              <option value="1" selected>On</option>
                                              <option value="0" >Off</option>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Welcome Section </label>
                                        <div class="col-sm-4">
                                           <select name="home_welcome_on_off" class="form-control" style="width:auto;">
                                              <option value="1" selected>On</option>
                                              <option value="0" >Off</option>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Featured Product Section </label>
                                        <div class="col-sm-4">
                                           <select name="home_featured_product_on_off" class="form-control" style="width:auto;">
                                              <option value="1" selected>On</option>
                                              <option value="0" >Off</option>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Latest Product Section </label>
                                        <div class="col-sm-4">
                                           <select name="home_latest_product_on_off" class="form-control" style="width:auto;">
                                              <option value="1" selected>On</option>
                                              <option value="0" >Off</option>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Popular Product Section </label>
                                        <div class="col-sm-4">
                                           <select name="home_popular_product_on_off" class="form-control" style="width:auto;">
                                              <option value="1" selected>On</option>
                                              <option value="0" >Off</option>
                                           </select>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form6_0">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                            <h3>Meta Section</h3>
                            <form class="form-horizontal" action="" method="post">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title </label>
                                        <div class="col-sm-8">
                                           <input type="text" name="meta_title_home" class="form-control" value="Ecommerce PHP">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                           <textarea class="form-control" name="meta_keyword_home" style="height:100px;">online fashion store, garments shop, online garments</textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                           <textarea class="form-control" name="meta_description_home" style="height:200px;">ecommerce php project with mysql database</textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form6">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                            
                            <h3>Featured Product Section</h3>
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Featured Product Title<span>*</span></label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="featured_product_title" value="Featured Products">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Featured Product SubTitle<span>*</span></label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="featured_product_subtitle" value="Our list on Top Featured Products">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form6_4">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                            <h3>Latest Product Section</h3>
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Latest Product Title<span>*</span></label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="latest_product_title" value="Latest Products">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Latest Product SubTitle<span>*</span></label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="latest_product_subtitle" value="Our list of recently added products">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form6_5">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                            <h3>Popular Product Section</h3>
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Popular Product Title<span>*</span></label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="popular_product_title" value="Popular Products">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Popular Product SubTitle<span>*</span></label>
                                        <div class="col-sm-8">
                                           <input type="text" class="form-control" name="popular_product_subtitle" value="Popular products based on customer's choice">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form6_6">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                            <h3>Newsletter Section</h3>
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Newsletter Text</label>
                                        <div class="col-sm-8">
                                           <textarea name="newsletter_text" class="form-control" cols="30" rows="10" style="height: 120px;">Sign-up to our newsletter for latest promotions and discounts.</textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form6_3">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="tab-pane" id="tab_7">
                            <table class="table table-bordered">
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Login Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_login.jpg')}}" alt="" style="width: 100%;height:auto;"> 
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Login Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_1">
                                     </td>
                                  </form>
                               </tr>
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Registration Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_registration.jpg')}}" alt="" style="width: 100%;height:auto;">  
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Registration Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_2">
                                     </td>
                                  </form>
                               </tr>
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Forget Password Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_forget_password.jpg')}}" alt="" style="width: 100%;height:auto;">   
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Forget Password Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_3">
                                     </td>
                                  </form>
                               </tr>
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Reset Password Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_reset_password.jpg')}}" alt="" style="width: 100%;height:auto;">   
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Reset Password Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_4">
                                     </td>
                                  </form>
                               </tr>
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Search Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_search.jpg')}}" alt="" style="width: 100%;height:auto;">  
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Search Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_6">
                                     </td>
                                  </form>
                               </tr>
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Cart Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_cart.jpg')}}" alt="" style="width: 100%;height:auto;">  
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Cart Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_7">
                                     </td>
                                  </form>
                               </tr>
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Checkout Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_checkout.jpg')}}" alt="" style="width: 100%;height:auto;">  
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Checkout Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_8">
                                     </td>
                                  </form>
                               </tr>
                               <tr>
                                  <form action="" method="post" enctype="multipart/form-data">
                                     <td style="width:50%">
                                        <h4>Existing Product Category Page Banner</h4>
                                        <p>
                                           <img src="{{asset('backend/uploads/banner_product_category.jpg')}}" alt="" style="width: 100%;height:auto;">  
                                        </p>
                                     </td>
                                     <td style="width:50%">
                                        <h4>Change Product Category Page Banner</h4>
                                        Select Photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change" style="margin-top:10px;" name="form7_9">
                                     </td>
                                  </form>
                               </tr>
                            </table>
                         </div>
                         <!-- PAYMENT METHODS TAB -->
                         <div class="tab-pane" id="tab_9">
                            <form class="form-horizontal" action="" method="post">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">PayPal - Business Email </label>
                                        <div class="col-sm-5">
                                           <input type="text" name="paypal_email" class="form-control" value="admin@ecom.com">
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Bank Information </label>
                                        <div class="col-sm-5">
                                           <textarea name="bank_detail" class="form-control" cols="30" rows="10">Bank Name: WestView Bank
                                           Account Number: CA100270589600
                                           Branch Name: CA Branch
                                           Country: USA</textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form9">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
                         </div>
                         <div class="tab-pane" id="tab_10">
                            <form class="form-horizontal" action="" method="post">
                               <div class="box box-info">
                                  <div class="box-body">
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Code before &lt;/head&gt; tag </label>
                                        <div class="col-sm-8">
                                           <textarea name="before_head" class="form-control" cols="30" rows="10"></textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Code after &lt;body&gt; tag </label>
                                        <div class="col-sm-8">
                                           <textarea name="after_body" class="form-control" cols="30" rows="10"><div id="fb-root"></div>
                                              <script>(function(d, s, id) {
                                                 var js, fjs = d.getElementsByTagName(s)[0];
                                                 if (d.getElementById(id)) return;
                                                 js = d.createElement(s); js.id = id;
                                                 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";
                                                 fjs.parentNode.insertBefore(js, fjs);
                                                 }(document, 'script', 'facebook-jssdk'));
                                              </script>
                                           </textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Code before &lt;/body&gt; tag </label>
                                        <div class="col-sm-8">
                                           <textarea name="before_body" class="form-control" cols="30" rows="10">
                                              <!--Start of Tawk.to Script-->
                                              <script type="text/javascript">
                                                 var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                                                 (function(){
                                                 var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                                                 s1.async=true;
                                                 s1.src='https://embed.tawk.to/5ae370d7227d3d7edc24cb96/default';
                                                 s1.charset='UTF-8';
                                                 s1.setAttribute('crossorigin','*');
                                                 s0.parentNode.insertBefore(s1,s0);
                                                 })();
                                              </script>
                                           <!--End of Tawk.to Script-->
                                           </textarea>
                                        </div>
                                     </div>
                                     <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                           <button type="submit" class="btn btn-success pull-left" name="form10">Update</button>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </form>
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
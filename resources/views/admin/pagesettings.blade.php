
@extends('admin_layout.master')

@section('title')

Page settings

@endsection

@section('content')

	  <!-- start content -->
    <div class="content-wrapper">
      <section class="content-header">
         <div class="content-header-left">
            <h1>Page Settings</h1>
         </div>
      </section>
      <section class="content" style="min-height:auto;margin-bottom: -30px;">
         <div class="row">
            <div class="col-md-12">
            </div>
         </div>
      </section>
      <section class="content">
         <div class="row">
            <div class="col-md-12">
               <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                     <li class="active"><a href="#tab_1" data-toggle="tab">About Us</a></li>
                     <li><a href="#tab_2" data-toggle="tab">FAQ</a></li>
                     <li><a href="#tab_4" data-toggle="tab">Contact</a></li>
                  </ul>
                  <!-- About us Page Content -->
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab_1">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                           <div class="box box-info">
                              <div class="box-body">
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Page Title * </label>
                                    <div class="col-sm-5">
                                       <input class="form-control" type="text" name="about_title" value="About Us">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Page Content * </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" name="about_content" id="editor1"><p style="border: 0px solid; margin-top: 1.5rem; margin-bottom: 0px;">Welcome to Ecommerce PHP Project!</p><p style="border: 0px solid; margin-top: 1.5rem; margin-bottom: 0px;"><span style="border: 0px solid;">We aim to offer our customers a variety of the latest [PRODUCTS_CATEGORY_NAME]. Weâ€™ve come a long way, so we know exactly which direction to take when supplying you with high quality yet budget-friendly products. We offer all of this while providing excellent customer service and friendly support.</span></p><p style="border: 0px solid; margin-top: 1.5rem; margin-bottom: 0px;"><span style="border: 0px solid;">We always keep an eye on the latest trends in [PRODUCTS CATEGORY NAME] and put our customersâ€™ wishes first. That is why we have satisfied customers all over the world, and are thrilled to be a part of the [PRODUCTS CATEGORY NAME] industry.</span></p><p style="border: 0px solid; margin-top: 1.5rem; margin-bottom: 0px;"><span style="border: 0px solid;">The interests of our customers are always top priority for us, so we hope you will enjoy our products as much as we enjoy making them available to you.</span></p><p>We make sure you get the best quality outfits with hassle free returns and exchanges policy. We ensure what you see is exactly what you get!</p><ul><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">Low Price Guarantee</span></font></li><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">24/7 Customer Support</span></font></li><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">E-Mail - Text - Call</span></font></li><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">We are here for you 24/7 online and via phone.</span></font></li><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">Sizing & Color</span></font></li><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">Worldwide Shipping</span></font></li><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">Weâ€™d love to expand our business Internationally soon.</span></font></li><li style="text-align: justify;"><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">Easy Returns</span></font></li></ul><p style="text-align: justify; "><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">Bought an outfit but want to return it? We have a 3 days easy return policy. Please mail us at support@ecommercephp.com for more details.</span></font></p><p style="text-align: justify; "><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;"><b>Dream Dresses for Every Occasion</b></span></font></p><p style="text-align: justify; "><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">Fashionys.com carries all carefully handpicked by our stylists. If youâ€™re interested in a particular model please mail us we will try our best to offer you the loved dress.</span></font></p><p style="text-align: justify; "><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;"><b>Verified Security</b></span></font></p><p style="text-align: justify; "><font face="apercu, Arial, sans-serif"><span style="font-size: 14px;">All our transactions are Verified by Norton and with the highest standards of security. Plus, there's a lot to go around too through regular exciting offers and gifts, so spread the word and refer us to everyone from your family, friends and colleagues and get rewarded for it. And to top it all, you can share your user experience by posting reviews. Donâ€™t wait any longer Sign up with us now! start stalking, start buying and start loving and start Introducing the beauty in you.</span></font></p>
</textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                       <img src="{{asset('backend/uploads/about-banner.jpg')}}" class="existing-photo" style="height:80px;">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                       <input type="file" name="about_banner">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Title</label>
                                    <div class="col-sm-8">
                                       <input class="form-control" type="text" name="about_meta_title" value="Ecommerce PHP - About Us">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" name="about_meta_keyword" style="height:100px;">about, about us, about fashion, about company, about ecommerce php project</textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Description </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" name="about_meta_description" style="height:100px;">Our goal has always been to get the best in you we brought a huge collection whether youâ€™re attending a party, wedding, and all those events that require a WOW dress.</textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                       <button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <!-- FAQ Page Content -->
                     <div class="tab-pane" id="tab_2">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                           <div class="box box-info">
                              <div class="box-body">
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Page Title * </label>
                                    <div class="col-sm-5">
                                       <input class="form-control" type="text" name="faq_title" value="FAQ">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                       <img src="{{asset('backend/uploads/faq-banner.jpg')}}" class="existing-photo" style="height:80px;">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                       <input type="file" name="faq_banner">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Title</label>
                                    <div class="col-sm-8">
                                       <input class="form-control" type="text" name="faq_meta_title" value="Fashionys.com - FAQ">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" name="faq_meta_keyword" style="height:100px;"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Description </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" name="faq_meta_description" style="height:100px;"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                       <button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <!-- End of FAQ Page Content -->
                     <div class="tab-pane" id="tab_4">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                           <div class="box box-info">
                              <div class="box-body">
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Page Title * </label>
                                    <div class="col-sm-5">
                                       <input class="form-control" type="text" name="contact_title" value="Contact Us">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                       <img src="{{asset('backend/uploads/contact-banner.jpg')}}" class="existing-photo" style="height:80px;">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                       <input type="file" name="contact_banner">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Title</label>
                                    <div class="col-sm-8">
                                       <input class="form-control" type="text" name="contact_meta_title" value="Fashionys.com - Contact">
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" name="contact_meta_keyword" style="height:100px;"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">Meta Description </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control" name="contact_meta_description" style="height:100px;"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="" class="col-sm-3 control-label"></label>
                                    <div class="col-sm-6">
                                       <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     </form>
                  </div>
               </div>
      </section>
      </div>
	  <!-- end content -->

	  @endsection
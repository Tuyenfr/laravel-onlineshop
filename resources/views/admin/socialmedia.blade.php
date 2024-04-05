
@extends('admin_layout.master')

@section('title')

Social Media

@endsection

@section('content')

<!-- start content -->
<div class="content-wrapper">
  <section class="content-header">
     <div class="content-header-left">
        <h1>Social Media</h1>
     </div>
  </section>
  <section class="content">
     <div class="row">
        <div class="col-md-12">
           <form class="form-horizontal" action="" method="post">
              <div class="box box-info">
                 <div class="box-body">
                    <p style="padding-bottom: 20px;">If you do not want to show a social media in your front end page, just leave the input field blank.</p>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Facebook </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="facebook" value="https://www.facebook.com/#">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Twitter </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="twitter" value="https://www.twitter.com/#">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">LinkedIn </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="linkedin" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Google Plus </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="googleplus" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Pinterest </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="pinterest" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">YouTube </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="youtube" value="https://www.youtube.com/#">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Instagram </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="instagram" value="https://www.instagram.com/#">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Tumblr </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="tumblr" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Flickr </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="flickr" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Reddit </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="reddit" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Snapchat </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="snapchat" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">WhatsApp </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="whatsapp" value="https://www.whatsapp.com/#">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Quora </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="quora" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">StumbleUpon </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="stumbleupon" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Delicious </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="delicious" value="">
                       </div>
                    </div>
                    <div class="form-group">
                       <label for="" class="col-sm-2 control-label">Digg </label>
                       <div class="col-sm-4">
                          <input type="text" class="form-control" name="digg" value="">
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
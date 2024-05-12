@extends('client_layout.master')

@section('title')
    Contact
@endsection

@section('content')
    <!-- ********************** start content ********************** -->

    <!-- start banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend/assets/uploads/contact-banner.jpg') }});">
        <div class="inner">
            <h1>Contact Us</h1>
        </div>
    </div>
    <!-- end banner -->

    <!-- start page content -->
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Contact Form</h3>
                    <div class="row cform">
                        <div class="col-md-8">
                            <div class="well well-sm">
                                <form action="" method="post">
                                    <input type="hidden" name="_csrf" value="305e2e05d29f55b50a14ad09db8b623c" />
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="visitor_name"
                                                    placeholder="Enter name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" name="visitor_email"
                                                    placeholder="Enter email address">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Phone Number</label>
                                                <input type="text" class="form-control" name="visitor_phone"
                                                    placeholder="Enter phone number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Message</label>
                                                <textarea name="visitor_message" class="form-control" rows="9" cols="25" placeholder="Enter message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="submit" value="Send Message" class="btn btn-primary pull-right"
                                                name="form_contact">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                            <address>
                                93 Simpson Avenue<br />
                                Harrisburg, PA
                            </address>
                            <address>
                                <strong>Phone:</strong><br>
                                <span>+001 10 101 0010</span>
                            </address>
                            <address>
                                <strong>Email:</strong><br>
                                <a href="mailto:support@ecommercephp.com"><span>support@ecommercephp.com</span></a>
                            </address>
                        </div>
                    </div>
                    <h3>Find Us On Map</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3094.020958405712!2d-84.39261378514685!3d39.151504939531584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8841acfb8da30203%3A0x193175e741781f21!2s4293%20Simpson%20Ave%2C%20Cincinnati%2C%20OH%2045227%2C%20USA!5e0!3m2!1sen!2snp!4v1647796779407!5m2!1sen!2snp"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

    <!-- ********************** end content ********************** -->
@endsection

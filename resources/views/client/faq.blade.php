@extends('client_layout.master')

@section('title')
    Faq
@endsection

@section('content')
    <!-- ********************** start content ********************** -->

    <!-- start banner -->
    <div class="page-banner" style="background-image: url({{ asset('frontend/assets/uploads/faq-banner.jpg') }});">
        <div class="inner">
            <h1>FAQ</h1>
        </div>
    </div>
    <!-- end banner -->

    <!-- start page content -->
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="faqAccordion">
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question1">
                                <h4 class="panel-title">
                                    Q: How to find an item?
                                </h4>
                            </div>
                            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                    <h3 class="checkout-complete-box font-bold txt16"
                                        style="box-sizing: inherit; text-rendering: optimizeLegibility; margin: 0.2rem 0px 0.5rem; padding: 0px; line-height: 1.4; background-color: rgb(250, 250, 250);">
                                        <font color="#222222"
                                            face="opensans, Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif"><span
                                                style="font-size: 15.7143px;">We have a wide range of fabulous products to
                                                choose from.</span></font>
                                    </h3>
                                    <h3 class="checkout-complete-box font-bold txt16"
                                        style="box-sizing: inherit; text-rendering: optimizeLegibility; margin: 0.2rem 0px 0.5rem; padding: 0px; line-height: 1.4; background-color: rgb(250, 250, 250);">
                                        <span
                                            style="font-size: 15.7143px; color: rgb(34, 34, 34); font-family: opensans, "Helvetica
                                            Neue", Helvetica, Helvetica, Arial, sans-serif;">Tip 1: If you're looking for a
                                            specific product, use the keyword search box located at the top of the site.
                                            Simply type what you are looking for, and prepare to be amazed!</span>
                                    </h3>
                                    <h3 class="checkout-complete-box font-bold txt16"
                                        style="box-sizing: inherit; text-rendering: optimizeLegibility; margin: 0.2rem 0px 0.5rem; padding: 0px; line-height: 1.4; background-color: rgb(250, 250, 250);">
                                        <font color="#222222"
                                            face="opensans, Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif"><span
                                                style="font-size: 15.7143px;">Tip 2: If you want to explore a category of
                                                products, use the Shop Categories in the upper menu, and navigate through
                                                your favorite categories where we'll feature the best products in
                                                each.</span></font><br><br>
                                    </h3>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question2">
                                <h4 class="panel-title">
                                    Q: What is your return policy?
                                </h4>
                            </div>
                            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                    <p><span
                                            style="color: rgb(10, 10, 10); font-family: opensans, Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center;">You
                                            have 15 days to make a refund request after your order has been
                                            delivered.</span><br></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question3">
                                <h4 class="panel-title">
                                    Q: I received a defective/damaged item, can I get a refund?
                                </h4>
                            </div>
                            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                    <p>In case the item you received is damaged or defective, you could return an item in
                                        the same condition as you received it with the original box and/or packaging intact.
                                        Once we receive the returned item, we will inspect it and if the item is found to be
                                        defective or damaged, we will process the refund along with any shipping fees
                                        incurred.<br></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question4">
                                <h4 class="panel-title">
                                    Q: When are ‘Returns’ not possible?
                                </h4>
                            </div>
                            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                    <p class="a  "
                                        style="box-sizing: inherit; text-rendering: optimizeLegibility; line-height: 1.6; margin-bottom: 0.714286rem; padding: 0px; font-size: 14px; color: rgb(10, 10, 10); font-family: opensans, Helvetica, Helvetica, Arial, sans-serif; background-color: rgb(250, 250, 250);">
                                        There are a few certain scenarios where it is difficult for us to support returns:
                                    </p>
                                    <ol
                                        style="box-sizing: inherit; line-height: 1.6; margin-right: 0px; margin-bottom: 0px; margin-left: 1.25rem; padding: 0px; list-style-position: outside; color: rgb(10, 10, 10); font-family: opensans, Helvetica, Helvetica, Arial, sans-serif; font-size: 14px; background-color: rgb(250, 250, 250);">
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">
                                            Return request is made outside the specified time frame, of 15 days from
                                            delivery.</li>
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">
                                            Product is used, damaged, or is not in the same condition as you received it.
                                        </li>
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">
                                            Specific categories like innerwear, lingerie, socks and clothing freebies etc.
                                        </li>
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">
                                            Defective products which are covered under the manufacturer's warranty.</li>
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">Any
                                            consumable item which has been used or installed.</li>
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">
                                            Products with tampered or missing serial numbers.</li>
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">
                                            Anything missing from the package you've received including price tags, labels,
                                            original packing, freebies and accessories.</li>
                                        <li style="box-sizing: inherit; margin: 0px; padding: 0px; font-size: inherit;">
                                            Fragile items, hygiene related items.</li>
                                    </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse"
                                data-parent="#faqAccordion" data-target="#question5">
                                <h4 class="panel-title">
                                    Q: What are the items that cannot be returned?
                                </h4>
                            </div>
                            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <h5><span class="label label-primary">Answer</span></h5>
                                    <p>
                                    <p>The items that can not be returned are:</p>
                                    <p>Clearance items clearly marked as such and displaying a No-Return Policy<br></p>
                                    <p>When the offer notes states so specifically are items that cannot be returned.</p>
                                    <p>Items that fall into the below product types-</p>
                                    <ul>
                                        <li>Underwear</li>
                                        <li>Lingerie</li>
                                        <li>Socks</li>
                                        <li>Software</li>
                                        <li>Music albums</li>
                                        <li>Books</li>
                                        <li>Swimwear</li>
                                        <li>Beauty &amp; Fragrances</li>
                                        <li>Hosiery</li>
                                    </ul>
                                    <p>Also, any consumable items that are used or installed cannot be returned. As outlined
                                        in consumer Protection Rights and concerning section on non-returnable items<br></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

    <!-- ********************** end content  ********************** -->
@endsection

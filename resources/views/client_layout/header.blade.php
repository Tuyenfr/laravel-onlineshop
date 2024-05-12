<!-- This is main configuration File -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/uploads/favicon.png') }}">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.bxslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/rating.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-touch-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tree-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <title>@yield('title')</title>
    <meta name="keywords" content="online fashion store, garments shop, online garments">
    <meta name="description" content="ecommerce php project with mysql database">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script type="text/javascript"
        src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons">
    </script>
</head>

<body>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- start top bar -->
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="left">
                        <ul>
                            <li><i class="fa fa-phone"></i> +001 10 101 0010</li>
                            <li><i class="fa fa-envelope-o"></i> support@ecommercephp.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="right">
                        <ul>
                            <li><a href="https://www.facebook.com/#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.instagram.com/#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.whatsapp.com/#"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end top bar -->

    <!-- start header -->
    <div class="header">
        <div class="container">
            <div class="row inner">
                <div class="col-md-4 logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/uploads/logo.png') }}"
                            alt="logo image"></a>
                </div>
                <div class="col-md-5 right">

                    <ul>
                        @if (Session::has('customer'))
                            <li><i class="fa fa-user"></i> Logged in as {{ Session::get('customer')->cust_name }}</a>
                            </li>
                            <li><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a></li>
                        @else
                            <li><a href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                            <li><a href="{{ url('register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                        @endif

                        <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart
                                (${{ Session::has('cart') ? Session::get('cart')->totalPrice : '0.00' }})</a></li>

                    </ul>
                </div>
                <div class="col-md-3 search-area">
                    <form class="navbar-form navbar-left" role="search" action="{{ url('searchproduct') }}"
                        method="get">
                        <input type="hidden" name="_csrf" value="">
                        <div class="form-group">
                            <input type="text" class="form-control search-top" placeholder="Search Product"
                                name="search_text">
                        </div>
                        <button type="submit" class="btn btn-danger">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- start navbar -->
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pl_0 pr_0">
                    <div class="menu-container">
                        <div class="menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                @foreach ($toplevelcategories as $toplevelcategory)
                                    <li>
                                        <a
                                            href="{{ url('productbytopcategory', [$toplevelcategory->tcat_name]) }}">{{ $toplevelcategory->tcat_name }}</a>
                                        <ul>
                                            @foreach ($midlevelcategories as $midlevelcategory)
                                                @if ($midlevelcategory->tcat_id == $toplevelcategory->tcat_name)
                                                    <li>
                                                        <a
                                                            href="{{ url('productbymidcategory', [$toplevelcategory->tcat_name, $midlevelcategory->mcat_name]) }}">{{ $midlevelcategory->mcat_name }}</a>
                                                        <ul>
                                                            @foreach ($endlevelcategories as $endlevelcategory)
                                                                @if (
                                                                    $endlevelcategory->tcat_id == $toplevelcategory->tcat_name &&
                                                                        $endlevelcategory->mcat_id == $midlevelcategory->mcat_name &&
                                                                        $endlevelcategory->ecat_name !== null)
                                                                    <li>
                                                                        <a
                                                                            href="{{ url('productbyendcategory', [$toplevelcategory->tcat_name, $midlevelcategory->mcat_name, $endlevelcategory->ecat_name]) }}">{{ $endlevelcategory->ecat_name }}</a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                @endif
                                    </li>
                                @endforeach
                            </ul>
                            </li>
                            @endforeach
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end navbar -->

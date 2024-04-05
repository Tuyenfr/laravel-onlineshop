<!-- This is main configuration File -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta Tags -->
      <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
      <!-- Favicon -->
      <link rel="icon" type="image/png" href="{{asset('frontend/assets/uploads/favicon.png')}}">
      <!-- Stylesheets -->
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.bxslider.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/rating.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/spacing.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap-touch-slider.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/tree-menu.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/select2.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
      <title>@yield('title')</title>
      <meta name="keywords" content="online fashion store, garments shop, online garments">
      <meta name="description" content="ecommerce php project with mysql database">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
      <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>
   </head>
   <body>

      <div id="fb-root"></div>
      <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
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
                  <a href="{{ url('/')}}"><img src="{{asset('frontend/assets/uploads/logo.png')}}" alt="logo image"></a>
               </div>
               <div class="col-md-5 right">
                  <ul>
                     <li><a href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
                     <li><a href="{{ url('register')}}"><i class="fa fa-user-plus"></i> Register</a></li>
                     <li><a href="{{ url('cart') }}"><i class="fa fa-shopping-cart"></i> Cart ($0.00)</a></li>
                  </ul>
               </div>
               <div class="col-md-3 search-area">
                  <form class="navbar-form navbar-left" role="search" action="{{ url('searchproduct')}}" method="get">
                     <input type="hidden" name="_csrf" value="305e2e05d29f55b50a14ad09db8b623c" />					
                     <div class="form-group">
                        <input type="text" class="form-control search-top" placeholder="Search Product" name="search_text">
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
                           <li><a href="{{ url('/')}}">Home</a></li>
                           <li>
                              <a href="product-category.php?id=1&type=top-category">Men</a>
                              <ul>
                                 <li>
                                    <a href="product-category.php?id=1&type=mid-category">Men Accessories</a>
                                    <ul>
                                       <li><a href="product-category.php?id=1&type=end-category">Headwear </a></li>
                                       <li><a href="product-category.php?id=2&type=end-category">Sunglasses</a></li>
                                       <li><a href="product-category.php?id=3&type=end-category">Watches</a></li>
                                       <li><a href="product-category.php?id=57&type=end-category">Belts</a></li>
                                       <li><a href="product-category.php?id=58&type=end-category">Multipacks</a></li>
                                       <li><a href="product-category.php?id=59&type=end-category">Other Accessories</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=2&type=mid-category">Men's Shoes</a>
                                    <ul>
                                       <li><a href="product-category.php?id=4&type=end-category">Sandals</a></li>
                                       <li><a href="product-category.php?id=5&type=end-category">Boots</a></li>
                                       <li><a href="product-category.php?id=11&type=end-category">Sports Shoes</a></li>
                                       <li><a href="product-category.php?id=25&type=end-category">Casual Shoes</a></li>
                                       <li><a href="product-category.php?id=56&type=end-category">Formal Shoes</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=8&type=mid-category">Bottoms</a>
                                    <ul>
                                       <li><a href="product-category.php?id=16&type=end-category">Pants</a></li>
                                       <li><a href="product-category.php?id=17&type=end-category">Jeans</a></li>
                                       <li><a href="product-category.php?id=18&type=end-category">Joggers</a></li>
                                       <li><a href="product-category.php?id=19&type=end-category">Shorts</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=9&type=mid-category">T-shirts & Shirts</a>
                                    <ul>
                                       <li><a href="product-category.php?id=20&type=end-category">T-shirts</a></li>
                                       <li><a href="product-category.php?id=21&type=end-category">Casual Shirts</a></li>
                                       <li><a href="product-category.php?id=22&type=end-category">Formal Shirts</a></li>
                                       <li><a href="product-category.php?id=23&type=end-category">Polo Shirts</a></li>
                                       <li><a href="product-category.php?id=24&type=end-category">Vests</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="product-category.php?id=2&type=top-category">Women</a>
                              <ul>
                                 <li>
                                    <a href="product-category.php?id=3&type=mid-category">Beauty Products</a>
                                    <ul>
                                       <li><a href="product-category.php?id=6&type=end-category">Tops</a></li>
                                       <li><a href="product-category.php?id=7&type=end-category">T-Shirt</a></li>
                                       <li><a href="product-category.php?id=39&type=end-category">Fragrance</a></li>
                                       <li><a href="product-category.php?id=40&type=end-category">Skincare</a></li>
                                       <li><a href="product-category.php?id=41&type=end-category">Hair Care</a></li>
                                       <li><a href="product-category.php?id=43&type=end-category">Eyes Care</a></li>
                                       <li><a href="product-category.php?id=44&type=end-category">Lips</a></li>
                                       <li><a href="product-category.php?id=45&type=end-category">Face Care</a></li>
                                       <li><a href="product-category.php?id=46&type=end-category">Gift Sets</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=4&type=mid-category">Accessories</a>
                                    <ul>
                                       <li><a href="product-category.php?id=8&type=end-category">Watches</a></li>
                                       <li><a href="product-category.php?id=9&type=end-category">Sunglasses</a></li>
                                       <li><a href="product-category.php?id=42&type=end-category">Jewellery</a></li>
                                       <li><a href="product-category.php?id=47&type=end-category">Scarves & Headwear</a></li>
                                       <li><a href="product-category.php?id=48&type=end-category">Multipacks</a></li>
                                       <li><a href="product-category.php?id=49&type=end-category">Other Accessories</a></li>
                                       <li><a href="product-category.php?id=60&type=end-category">Bags</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=6&type=mid-category">Shoes</a>
                                    <ul>
                                       <li><a href="product-category.php?id=12&type=end-category">Sandals</a></li>
                                       <li><a href="product-category.php?id=13&type=end-category">Flat Shoes</a></li>
                                       <li><a href="product-category.php?id=50&type=end-category">Pumps</a></li>
                                       <li><a href="product-category.php?id=51&type=end-category">Sneakers</a></li>
                                       <li><a href="product-category.php?id=52&type=end-category">Sports Shoes</a></li>
                                       <li><a href="product-category.php?id=53&type=end-category">Boots</a></li>
                                       <li><a href="product-category.php?id=54&type=end-category">Comfort Shoes</a></li>
                                       <li><a href="product-category.php?id=55&type=end-category">Slippers & Casual Shoes</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=7&type=mid-category">Clothing</a>
                                    <ul>
                                       <li><a href="product-category.php?id=14&type=end-category">Hoodies</a></li>
                                       <li><a href="product-category.php?id=15&type=end-category">Coats & Jackets</a></li>
                                       <li><a href="product-category.php?id=32&type=end-category">Dresses</a></li>
                                       <li><a href="product-category.php?id=33&type=end-category">Tops</a></li>
                                       <li><a href="product-category.php?id=34&type=end-category">T-Shirts & Vests</a></li>
                                       <li><a href="product-category.php?id=35&type=end-category">Pants & Leggings</a></li>
                                       <li><a href="product-category.php?id=36&type=end-category">Sportswear</a></li>
                                       <li><a href="product-category.php?id=37&type=end-category">Plus Size Clothing</a></li>
                                       <li><a href="product-category.php?id=38&type=end-category">Socks & Hosiery</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="product-category.php?id=3&type=top-category">Kids</a>
                              <ul>
                                 <li>
                                    <a href="product-category.php?id=10&type=mid-category">Clothing</a>
                                    <ul>
                                       <li><a href="product-category.php?id=26&type=end-category">Boys</a></li>
                                       <li><a href="product-category.php?id=27&type=end-category">Girls</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=11&type=mid-category">Shoes</a>
                                    <ul>
                                       <li><a href="product-category.php?id=28&type=end-category">Boys</a></li>
                                       <li><a href="product-category.php?id=29&type=end-category">Girls</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=12&type=mid-category">Accessories</a>
                                    <ul>
                                       <li><a href="product-category.php?id=30&type=end-category">Boys</a></li>
                                       <li><a href="product-category.php?id=31&type=end-category">Girls</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="product-category.php?id=4&type=top-category">Electronics</a>
                              <ul>
                                 <li>
                                    <a href="product-category.php?id=14&type=mid-category">Electronic Items</a>
                                    <ul>
                                       <li><a href="product-category.php?id=61&type=end-category">Cell Phone and Accessories</a></li>
                                       <li><a href="product-category.php?id=62&type=end-category">Headphones</a></li>
                                       <li><a href="product-category.php?id=63&type=end-category">Security and Surveillance</a></li>
                                       <li><a href="product-category.php?id=64&type=end-category">Television and Video</a></li>
                                       <li><a href="product-category.php?id=65&type=end-category">GPS and Navigation</a></li>
                                       <li><a href="product-category.php?id=66&type=end-category">Home Audio</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=15&type=mid-category">Computers</a>
                                    <ul>
                                       <li><a href="product-category.php?id=67&type=end-category">Computer Components</a></li>
                                       <li><a href="product-category.php?id=68&type=end-category">Computers and Tablets</a></li>
                                       <li><a href="product-category.php?id=69&type=end-category">Laptop Accessories</a></li>
                                       <li><a href="product-category.php?id=70&type=end-category">Printer and Monitors</a></li>
                                       <li><a href="product-category.php?id=71&type=end-category">External Components</a></li>
                                       <li><a href="product-category.php?id=72&type=end-category">Networking Products</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li>
                              <a href="product-category.php?id=5&type=top-category">Health and Household</a>
                              <ul>
                                 <li>
                                    <a href="product-category.php?id=16&type=mid-category">Health</a>
                                    <ul>
                                       <li><a href="product-category.php?id=73&type=end-category">Medical Supplies and Equipment</a></li>
                                       <li><a href="product-category.php?id=74&type=end-category">Oral Care</a></li>
                                       <li><a href="product-category.php?id=75&type=end-category">Vision Care</a></li>
                                       <li><a href="product-category.php?id=76&type=end-category">Vitamins and Dietary Supplements</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="product-category.php?id=17&type=mid-category">Household</a>
                                    <ul>
                                       <li><a href="product-category.php?id=77&type=end-category">Baby and Child Care</a></li>
                                       <li><a href="product-category.php?id=78&type=end-category">Household Supplies</a></li>
                                       <li><a href="product-category.php?id=79&type=end-category">Stationery and Gift Wrapping Supplies</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li><a href="{{ url('about')}}">About Us</a></li>
                           <li><a href="{{ url('contact')}}">Contact Us</a></li>
                           <li><a href="{{ url('faq')}}">FAQ</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end navbar -->
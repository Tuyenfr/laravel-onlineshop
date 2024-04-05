
@extends('client_layout.master')

@section('title')

View Product by Category

@endsection

@section('content')

    <!-- ********************** start content ********************** -->

    <!-- start banner -->
    <div class="page-banner" style="background-image: url({{asset('frontend/assets/uploads/banner_product_category.jpg')}})">
      <div class="inner">
         <h1>Category: Men</h1>
      </div>
  </div>
   <!-- end banner -->

  <!-- start page content -->
  <div class="page">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <h3>Categories</h3>
               <div id="left" class="span3">
                  <ul id="menu-group-1" class="nav menu">
                     <li class="cat-level-1 deeper parent">
                        <a class="" href="product-category.php?id=1&type=top-category">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl1-id-1" class="sign"><i class="fa fa-plus"></i></span>
                        <span class="lbl">Men</span>                      
                        </a>
                        <ul class="children nav-child unstyled small collapse" id="cat-lvl1-id-1">
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=1&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-11" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Men Accessories</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-11">
                                 <li class="item-111">
                                    <a class="" href="product-category.php?id=1&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Headwear </span>
                                    </a>
                                 </li>
                                 <li class="item-112">
                                    <a class="" href="product-category.php?id=2&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sunglasses</span>
                                    </a>
                                 </li>
                                 <li class="item-113">
                                    <a class="" href="product-category.php?id=3&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Watches</span>
                                    </a>
                                 </li>
                                 <li class="item-114">
                                    <a class="" href="product-category.php?id=57&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Belts</span>
                                    </a>
                                 </li>
                                 <li class="item-115">
                                    <a class="" href="product-category.php?id=58&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Multipacks</span>
                                    </a>
                                 </li>
                                 <li class="item-116">
                                    <a class="" href="product-category.php?id=59&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Other Accessories</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=2&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-12" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Men's Shoes</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-12">
                                 <li class="item-121">
                                    <a class="" href="product-category.php?id=4&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sandals</span>
                                    </a>
                                 </li>
                                 <li class="item-122">
                                    <a class="" href="product-category.php?id=5&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Boots</span>
                                    </a>
                                 </li>
                                 <li class="item-123">
                                    <a class="" href="product-category.php?id=11&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sports Shoes</span>
                                    </a>
                                 </li>
                                 <li class="item-124">
                                    <a class="" href="product-category.php?id=25&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Casual Shoes</span>
                                    </a>
                                 </li>
                                 <li class="item-125">
                                    <a class="" href="product-category.php?id=56&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Formal Shoes</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=8&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-13" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Bottoms</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-13">
                                 <li class="item-131">
                                    <a class="" href="product-category.php?id=16&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Pants</span>
                                    </a>
                                 </li>
                                 <li class="item-132">
                                    <a class="" href="product-category.php?id=17&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Jeans</span>
                                    </a>
                                 </li>
                                 <li class="item-133">
                                    <a class="" href="product-category.php?id=18&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Joggers</span>
                                    </a>
                                 </li>
                                 <li class="item-134">
                                    <a class="" href="product-category.php?id=19&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Shorts</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=9&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-14" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">T-shirts & Shirts</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-14">
                                 <li class="item-141">
                                    <a class="" href="product-category.php?id=20&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">T-shirts</span>
                                    </a>
                                 </li>
                                 <li class="item-142">
                                    <a class="" href="product-category.php?id=21&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Casual Shirts</span>
                                    </a>
                                 </li>
                                 <li class="item-143">
                                    <a class="" href="product-category.php?id=22&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Formal Shirts</span>
                                    </a>
                                 </li>
                                 <li class="item-144">
                                    <a class="" href="product-category.php?id=23&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Polo Shirts</span>
                                    </a>
                                 </li>
                                 <li class="item-145">
                                    <a class="" href="product-category.php?id=24&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Vests</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="cat-level-1 deeper parent">
                        <a class="" href="product-category.php?id=2&type=top-category">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl1-id-2" class="sign"><i class="fa fa-plus"></i></span>
                        <span class="lbl">Women</span>                      
                        </a>
                        <ul class="children nav-child unstyled small collapse" id="cat-lvl1-id-2">
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=3&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-21" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Beauty Products</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-21">
                                 <li class="item-211">
                                    <a class="" href="product-category.php?id=6&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Tops</span>
                                    </a>
                                 </li>
                                 <li class="item-212">
                                    <a class="" href="product-category.php?id=7&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">T-Shirt</span>
                                    </a>
                                 </li>
                                 <li class="item-213">
                                    <a class="" href="product-category.php?id=39&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Fragrance</span>
                                    </a>
                                 </li>
                                 <li class="item-214">
                                    <a class="" href="product-category.php?id=40&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Skincare</span>
                                    </a>
                                 </li>
                                 <li class="item-215">
                                    <a class="" href="product-category.php?id=41&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Hair Care</span>
                                    </a>
                                 </li>
                                 <li class="item-216">
                                    <a class="" href="product-category.php?id=43&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Eyes Care</span>
                                    </a>
                                 </li>
                                 <li class="item-217">
                                    <a class="" href="product-category.php?id=44&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Lips</span>
                                    </a>
                                 </li>
                                 <li class="item-218">
                                    <a class="" href="product-category.php?id=45&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Face Care</span>
                                    </a>
                                 </li>
                                 <li class="item-219">
                                    <a class="" href="product-category.php?id=46&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Gift Sets</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=4&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-22" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Accessories</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-22">
                                 <li class="item-221">
                                    <a class="" href="product-category.php?id=8&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Watches</span>
                                    </a>
                                 </li>
                                 <li class="item-222">
                                    <a class="" href="product-category.php?id=9&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sunglasses</span>
                                    </a>
                                 </li>
                                 <li class="item-223">
                                    <a class="" href="product-category.php?id=42&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Jewellery</span>
                                    </a>
                                 </li>
                                 <li class="item-224">
                                    <a class="" href="product-category.php?id=47&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Scarves & Headwear</span>
                                    </a>
                                 </li>
                                 <li class="item-225">
                                    <a class="" href="product-category.php?id=48&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Multipacks</span>
                                    </a>
                                 </li>
                                 <li class="item-226">
                                    <a class="" href="product-category.php?id=49&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Other Accessories</span>
                                    </a>
                                 </li>
                                 <li class="item-227">
                                    <a class="" href="product-category.php?id=60&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Bags</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=6&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-23" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Shoes</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-23">
                                 <li class="item-231">
                                    <a class="" href="product-category.php?id=12&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sandals</span>
                                    </a>
                                 </li>
                                 <li class="item-232">
                                    <a class="" href="product-category.php?id=13&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Flat Shoes</span>
                                    </a>
                                 </li>
                                 <li class="item-233">
                                    <a class="" href="product-category.php?id=50&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Pumps</span>
                                    </a>
                                 </li>
                                 <li class="item-234">
                                    <a class="" href="product-category.php?id=51&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sneakers</span>
                                    </a>
                                 </li>
                                 <li class="item-235">
                                    <a class="" href="product-category.php?id=52&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sports Shoes</span>
                                    </a>
                                 </li>
                                 <li class="item-236">
                                    <a class="" href="product-category.php?id=53&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Boots</span>
                                    </a>
                                 </li>
                                 <li class="item-237">
                                    <a class="" href="product-category.php?id=54&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Comfort Shoes</span>
                                    </a>
                                 </li>
                                 <li class="item-238">
                                    <a class="" href="product-category.php?id=55&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Slippers & Casual Shoes</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=7&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-24" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Clothing</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-24">
                                 <li class="item-241">
                                    <a class="" href="product-category.php?id=14&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Hoodies</span>
                                    </a>
                                 </li>
                                 <li class="item-242">
                                    <a class="" href="product-category.php?id=15&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Coats & Jackets</span>
                                    </a>
                                 </li>
                                 <li class="item-243">
                                    <a class="" href="product-category.php?id=32&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Dresses</span>
                                    </a>
                                 </li>
                                 <li class="item-244">
                                    <a class="" href="product-category.php?id=33&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Tops</span>
                                    </a>
                                 </li>
                                 <li class="item-245">
                                    <a class="" href="product-category.php?id=34&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">T-Shirts & Vests</span>
                                    </a>
                                 </li>
                                 <li class="item-246">
                                    <a class="" href="product-category.php?id=35&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Pants & Leggings</span>
                                    </a>
                                 </li>
                                 <li class="item-247">
                                    <a class="" href="product-category.php?id=36&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Sportswear</span>
                                    </a>
                                 </li>
                                 <li class="item-248">
                                    <a class="" href="product-category.php?id=37&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Plus Size Clothing</span>
                                    </a>
                                 </li>
                                 <li class="item-249">
                                    <a class="" href="product-category.php?id=38&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Socks & Hosiery</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="cat-level-1 deeper parent">
                        <a class="" href="product-category.php?id=3&type=top-category">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl1-id-3" class="sign"><i class="fa fa-plus"></i></span>
                        <span class="lbl">Kids</span>                      
                        </a>
                        <ul class="children nav-child unstyled small collapse" id="cat-lvl1-id-3">
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=10&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-31" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Clothing</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-31">
                                 <li class="item-311">
                                    <a class="" href="product-category.php?id=26&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Boys</span>
                                    </a>
                                 </li>
                                 <li class="item-312">
                                    <a class="" href="product-category.php?id=27&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Girls</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=11&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-32" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Shoes</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-32">
                                 <li class="item-321">
                                    <a class="" href="product-category.php?id=28&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Boys</span>
                                    </a>
                                 </li>
                                 <li class="item-322">
                                    <a class="" href="product-category.php?id=29&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Girls</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=12&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-33" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Accessories</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-33">
                                 <li class="item-331">
                                    <a class="" href="product-category.php?id=30&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Boys</span>
                                    </a>
                                 </li>
                                 <li class="item-332">
                                    <a class="" href="product-category.php?id=31&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Girls</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="cat-level-1 deeper parent">
                        <a class="" href="product-category.php?id=4&type=top-category">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl1-id-4" class="sign"><i class="fa fa-plus"></i></span>
                        <span class="lbl">Electronics</span>                      
                        </a>
                        <ul class="children nav-child unstyled small collapse" id="cat-lvl1-id-4">
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=14&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-41" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Electronic Items</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-41">
                                 <li class="item-411">
                                    <a class="" href="product-category.php?id=61&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Cell Phone and Accessories</span>
                                    </a>
                                 </li>
                                 <li class="item-412">
                                    <a class="" href="product-category.php?id=62&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Headphones</span>
                                    </a>
                                 </li>
                                 <li class="item-413">
                                    <a class="" href="product-category.php?id=63&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Security and Surveillance</span>
                                    </a>
                                 </li>
                                 <li class="item-414">
                                    <a class="" href="product-category.php?id=64&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Television and Video</span>
                                    </a>
                                 </li>
                                 <li class="item-415">
                                    <a class="" href="product-category.php?id=65&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">GPS and Navigation</span>
                                    </a>
                                 </li>
                                 <li class="item-416">
                                    <a class="" href="product-category.php?id=66&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Home Audio</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=15&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-42" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Computers</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-42">
                                 <li class="item-421">
                                    <a class="" href="product-category.php?id=67&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Computer Components</span>
                                    </a>
                                 </li>
                                 <li class="item-422">
                                    <a class="" href="product-category.php?id=68&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Computers and Tablets</span>
                                    </a>
                                 </li>
                                 <li class="item-423">
                                    <a class="" href="product-category.php?id=69&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Laptop Accessories</span>
                                    </a>
                                 </li>
                                 <li class="item-424">
                                    <a class="" href="product-category.php?id=70&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Printer and Monitors</span>
                                    </a>
                                 </li>
                                 <li class="item-425">
                                    <a class="" href="product-category.php?id=71&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">External Components</span>
                                    </a>
                                 </li>
                                 <li class="item-426">
                                    <a class="" href="product-category.php?id=72&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Networking Products</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li class="cat-level-1 deeper parent">
                        <a class="" href="product-category.php?id=5&type=top-category">
                        <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl1-id-5" class="sign"><i class="fa fa-plus"></i></span>
                        <span class="lbl">Health and Household</span>                      
                        </a>
                        <ul class="children nav-child unstyled small collapse" id="cat-lvl1-id-5">
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=16&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-51" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Health</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-51">
                                 <li class="item-511">
                                    <a class="" href="product-category.php?id=73&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Medical Supplies and Equipment</span>
                                    </a>
                                 </li>
                                 <li class="item-512">
                                    <a class="" href="product-category.php?id=74&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Oral Care</span>
                                    </a>
                                 </li>
                                 <li class="item-513">
                                    <a class="" href="product-category.php?id=75&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Vision Care</span>
                                    </a>
                                 </li>
                                 <li class="item-514">
                                    <a class="" href="product-category.php?id=76&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Vitamins and Dietary Supplements</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="deeper parent">
                              <a class="" href="product-category.php?id=17&type=mid-category">
                              <span data-toggle="collapse" data-parent="#menu-group-1" href="#cat-lvl2-id-52" class="sign"><i class="fa fa-plus"></i></span>
                              <span class="lbl lbl1">Household</span> 
                              </a>
                              <ul class="children nav-child unstyled small collapse" id="cat-lvl2-id-52">
                                 <li class="item-521">
                                    <a class="" href="product-category.php?id=77&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Baby and Child Care</span>
                                    </a>
                                 </li>
                                 <li class="item-522">
                                    <a class="" href="product-category.php?id=78&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Household Supplies</span>
                                    </a>
                                 </li>
                                 <li class="item-523">
                                    <a class="" href="product-category.php?id=79&type=end-category">
                                    <span class="sign"></span>
                                    <span class="lbl lbl1">Stationery and Gift Wrapping Supplies</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-9">
               <h3>All Products Under "Men"</h3>
               <div class="product product-cat">
                  <div class="row">
                     <div class="col-md-4 item item-product-cat">
                        <div class="inner">
                           <div class="thumb">
                              <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-86.jpg')}});"></div>
                              <div class="overlay"></div>
                           </div>
                           <div class="text">
                              <h3><a href="product.php?id=86">Amazfit GTS 3 Smart Watch for Android iPhone</a></h3>
                              <h4>
                                 $179 
                                 <del>
                                 $199                                                    </del>
                              </h4>
                              <div class="rating">
                              </div>
                              <p><a href="product.php?id=86"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 item item-product-cat">
                        <div class="inner">
                           <div class="thumb">
                              <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-85.jpg')}});"></div>
                              <div class="overlay"></div>
                           </div>
                           <div class="text">
                              <h3><a href="product.php?id=85">Men's Soft Classic Sneaker</a></h3>
                              <h4>
                                 $91 
                                 <del>
                                 $110                                                    </del>
                              </h4>
                              <div class="rating">
                              </div>
                              <p><a href="product.php?id=85"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 item item-product-cat">
                        <div class="inner">
                           <div class="thumb">
                              <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-89.jpg')}});"></div>
                              <div class="overlay"></div>
                           </div>
                           <div class="text">
                              <h3><a href="product.php?id=89">Men's Fleece Jogger Pant</a></h3>
                              <h4>
                                 $37 
                                 <del>
                                 $58                                                    </del>
                              </h4>
                              <div class="rating">
                              </div>
                              <p><a href="product.php?id=89"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 item item-product-cat">
                        <div class="inner">
                           <div class="thumb">
                              <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-100.jpg')}});"></div>
                              <div class="overlay"></div>
                           </div>
                           <div class="text">
                              <h3><a href="product.php?id=100">Men's Long Cuffed Jogger Yoga Sweat Pant</a></h3>
                              <h4>
                                 $95 
                                 <del>
                                 $105                                                    </del>
                              </h4>
                              <div class="rating">
                              </div>
                              <p><a href="product.php?id=100"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 item item-product-cat">
                        <div class="inner">
                           <div class="thumb">
                              <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-96.jpg')}});"></div>
                              <div class="overlay"></div>
                           </div>
                           <div class="text">
                              <h3><a href="product.php?id=96">Men's Loose Fit Heavyweight Long-Sleeve Pocket T-Shirt</a></h3>
                              <h4>
                                 $23 
                                 <del>
                                 $29                                                    </del>
                              </h4>
                              <div class="rating">
                              </div>
                              <p><a href="product.php?id=96"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 item item-product-cat">
                        <div class="inner">
                           <div class="thumb">
                              <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-83.jpg')}})';"></div>
                              <div class="overlay"></div>
                           </div>
                           <div class="text">
                              <h3><a href="product.php?id=83">Men's Ultra Cotton T-Shirt, Multipack</a></h3>
                              <h4>
                                 $19 
                                 <del>
                                 $26                                                    </del>
                              </h4>
                              <div class="rating">
                              </div>
                              <p><a href="product.php?id=83"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 item item-product-cat">
                        <div class="inner">
                           <div class="thumb">
                              <div class="photo" style="background-image:url({{asset('frontend/assets/uploads/product-featured-88.jpg')}});"></div>
                              <div class="overlay"></div>
                           </div>
                           <div class="text">
                              <h3><a href="product.php?id=88">Under Armour Men's Sportstyle Left Chest Short Sleeve T-shirt</a></h3>
                              <h4>
                                 $83 
                                 <del>
                                 $108                                                    </del>
                              </h4>
                              <div class="rating">
                              </div>
                              <p><a href="product.php?id=88"><i class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
  </div>
  <!-- end page content -->

  <!-- ********************** end content ********************** -->

@endsection
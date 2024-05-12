@extends('client_layout.master')

@section('title')
    View Product by Category
@endsection

@section('content')
    <!-- ********************** start content ********************** -->

    <!-- start banner -->
    <div class="page-banner"
        style="background-image: url({{ asset('frontend/assets/uploads/banner_product_category.jpg') }})">
        <div class="inner">
            <h1>Category: <a style="color: white"
                    href="{{ url('productbytopcategory', [$toplevelcategoryname]) }}">{{ $toplevelcategoryname }}</a></h1>
        </div>
    </div>
    <!-- end banner -->

    @php
        $increment = 1;
        $increment1 = 1;
    @endphp

    <!-- start page content -->
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Categories</h3>
                    <div id="left" class="span3">
                        <ul id="menu-group-1" class="nav menu">
                            @foreach ($toplevelcategories as $toplevelcategory)
                                <li class="cat-level-1 deeper parent">
                                    <a class=""
                                        href="{{ url('productbytopcategory', [$toplevelcategory->tcat_name]) }}">
                                        <span data-toggle="collapse" data-parent="#menu-group-1"
                                            href="#cat-lvl1-id-{{ $increment }}" class="sign"><i
                                                class="fa fa-plus"></i></span>
                                        <span class="lbl">{{ $toplevelcategory->tcat_name }}</span>
                                    </a>
                                    <ul class="children nav-child unstyled small collapse"
                                        id="cat-lvl1-id-{{ $increment }}">
                                        @foreach ($midlevelcategories as $midlevelcategory)
                                            <li class="deeper parent">
                                                @if ($midlevelcategory->tcat_id == $toplevelcategory->tcat_name)
                                                    <a class=""
                                                        href="{{ url('productbymidcategory', [$toplevelcategory->tcat_name, $midlevelcategory->mcat_name]) }}">
                                                        <span data-toggle="collapse" data-parent="#menu-group-1"
                                                            href="#cat-lvl2-id-{{ $increment1 }}" class="sign"><i
                                                                class="fa fa-plus"></i></span>
                                                        <span class="lbl lbl1">{{ $midlevelcategory->mcat_name }}</span>
                                                    </a>
                                                    <ul class="children nav-child unstyled small collapse"
                                                        id="cat-lvl2-id-{{ $increment1 }}">
                                                        @foreach ($endlevelcategories as $endlevelcategory)
                                                            <li class="item-111">
                                                                @if (
                                                                    $endlevelcategory->tcat_id == $toplevelcategory->tcat_name &&
                                                                        $endlevelcategory->mcat_id == $midlevelcategory->mcat_name)
                                                                    <a class=""
                                                                        href="{{ url('productbyendcategory', [$toplevelcategory->tcat_name, $midlevelcategory->mcat_name, $endlevelcategory->ecat_name]) }}">
                                                                        <span class="sign"></span>
                                                                        <span
                                                                            class="lbl lbl1">{{ $endlevelcategory->ecat_name }}</span>
                                                                    </a>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                            @php
                                                $increment1++;
                                            @endphp
                                        @endforeach
                                    </ul>
                                </li>
                                @php
                                    $increment++;
                                @endphp
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    @if (isset($endlevelcategoryname))
                        <h3>All Products Under "<a style="color: black"
                                href="{{ url('productbymidcategory', [$toplevelcategoryname, $midlevelcategoryname]) }}">{{ $midlevelcategoryname }}</a>-->{{ $endlevelcategoryname }}"
                        </h3>
                    @elseif(isset($midlevelcategoryname))
                        <h3>All Products Under "
                            {{ $midlevelcategoryname }}
                            "</h3>
                    @elseif($toplevelcategoryname)
                        <h3>All Products Under "{{ $toplevelcategoryname }}"</h3>
                    @endif
                    @foreach ($products as $product)
                        <div class="product product-cat">
                            <div class="row">
                                <div class="col-md-4 item item-product-cat">
                                    <div class="inner">
                                        <a href="{{ url('productdetails', [$product->id]) }}">
                                            <div class="thumb">
                                                <div class="photo"
                                                    style="background-image:url({{ asset('storage/productimages/' . $product->p_featured_photo) }});">
                                                </div>
                                                <div class="overlay"></div>
                                            </div>
                                        </a>
                                        <div class="text">
                                            <h3>{{ $product->p_name }}</h3>
                                            <h4>
                                                {{ $product->p_current_price }}
                                                <del>
                                                    {{ $product->p_old_price }}</del>
                                            </h4>
                                            <div class="rating">
                                            </div>
                                            <p><a href="{{ url('productdetails', [$product->id]) }}"><i
                                                        class="fa fa-shopping-cart"></i> Add to Cart</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

    <!-- ********************** end content ********************** -->
@endsection

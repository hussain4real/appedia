@extends('layouts.front')


@section('content')
{{-- <div class="container text-center">
    <h2>Products</h2>

    <div class="row">

        @foreach ($allProducts as $product)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{ Voyager::image( $product->cover_img ) }}" alt="Card image cap">
<div class="card-body">
    <h4 class="card-title">{{$product->name}}</h4>
    <p class="card-text">{{$product->description}}</p>

    <h5>${{$product->price}}</h5>
</div>
<div class="card-body">
    <a href="{{ route('cart.add', $product->id) }}" class="card-link" id="add">Add to cart
        <i class="fas fa-cart-arrow-down"></i>
    </a>
</div>
</div>
</div>
@endforeach
</div>
</div> --}}
<header>
    <div class="header-area">
        <div class="header-left-sidebar">
            <div class="logo">
                <a href="{{route('home')}}"><img src="" alt="APPEDIA LOGO"></a>
            </div>
            <div class="main-menu menu-hover">
                <nav>
                    <ul>
                        <li><a href="{{route('home')}}">Home</a>
                            {{-- <ul class="single-dropdown">
                        <li><a href="index.html">Fashion</a></li>
                        <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                        <li><a href="index-fruits.html">fruits</a></li>
                        <li><a href="index-book.html">book</a></li>
                        <li><a href="index-electronics.html">electronics</a></li>
                        <li><a href="index-electronics-2.html">electronics style 2</a></li>
                        <li><a href="index-food.html">food & drink</a></li>
                        <li><a href="index-furniture.html">furniture</a></li>
                        <li><a href="index-handicraft.html">handicraft</a></li>
                        <li><a target="_blank" href="index-smart-watch.html">smart watch</a></li>
                        <li><a href="index-sports.html">sports</a></li>
                     </ul> --}}
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="single-dropdown">
                                <li><a href="#">about us</a></li>
                                <li><a href="#">menu list</a></li>
                                <li><a href="#">cart page</a></li>
                                <li><a href="#">checkout</a></li>
                                <li><a href="#">wishlist</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </li>
                        @foreach ($categories as $category)


                        <li><a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}
                                <span>Hot</span></a>

                            @php
                            $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                            @endphp

                            @if ($children->isNotEmpty())
                            <div class="mega-menu-dropdown mega-dropdown-width">

                                @foreach ($children as $child)

                                <div class="mega-dropdown-style mega-common4 mb-40">
                                    <h4 class="mega-subtitle">
                                        <a
                                            href="{{route('products.index', ['category_id' => $child->id])}}">{{$child->name}}</a>
                                    </h4>

                                    @php
                                    $grandChildren = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                    @endphp

                                    @if ($grandChildren->isNotEmpty())
                                    <ul>
                                        @foreach ($grandChildren as $grandChild)

                                        <li><a
                                                href="{{route('products.index', ['category_id' => $grandChild->id])}} ">{{$grandChild->name }}</a>
                                        </li>
                                        @endforeach

                                    </ul>
                                    @endif
                                </div>
                                @endforeach


                                {{-- <div class="mega-dropdown-style mega-common4 mb-40">
                           <h4 class="mega-subtitle"> Men</h4>
                           <ul>
                              <li><a href="#">View All</a></li>
                              <li><a href="#">New Trends</a></li>
                              <li><a href="#">Boots</a></li>
                              <li><a href="#">Flat Shoes</a></li>
                              <li><a href="#">Men Watches</a></li>
                              <li><a href="#">Slippers</a></li>
                              <li><a href="#">Trainers</a></li>
                           </ul>
                        </div>
                        <div class="mega-dropdown-style mega-common4 mb-40">
                           <h4 class="mega-subtitle">Kids</h4>
                           <ul>
                              <li><a href="#">Baby Dress</a></li>
                              <li><a href="#">Winter cloths</a></li>
                              <li><a href="#">Holidays</a></li>
                              <li><a href="#">Accessories</a></li>
                              <li><a href="#">Outing Dress</a></li>
                              <li><a href="#">Baby Essentials</a></li>
                           </ul>
                        </div> --}}


                                {{-- <div class="mega-dropdown-style mega-common4 discount-mega-common4 mb-40">
                           <div class="mega-discount">
                              <h5>Make A Discount</h5>
                              <h2>UP TO 30%</h2>
                           </div>
                        </div>
                        <div class="mega-banner-img-2">
                           <a href="single-product.html"><img src="/assets/img/bg/3.png" alt=""></a>
                        </div> --}}
                            </div>
                            @endif
                        </li>
                        @endforeach
                        <li><a href="#">Shop</a>
                            <div class="mega-menu-dropdown mega-dropdown-width-2">
                                <div class="mega-dropdown-style mega-common2 mega-common4">
                                    <h4 class="mega-subtitle"> shop layout</h4>
                                    <ul>
                                        <li><a href="shop-grid-2-col.html"> Shop 1</a></li>
                                        <li><a href="shop-grid-3-col.html"> Shop 2</a></li>
                                        <li><a href="shop.html">Shop 3</a></li>

                                    </ul>
                                </div>

                            </div>
                        </li>


                        </li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Health <span>New</span></a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="currency">
                <ul>
                    <li><a href="#">EN</a></li>
                    <li><a href="#">AR</a></li>
                </ul>
            </div>
        </div>
    </div>



    {{-- right side header --}}
    <div class="header-right-sidebar">
        <div class="header-search-cart-login">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="" alt="Appedia">
                </a>
            </div>
            <div class="header-search">
                <form action="{{route('products.search')}}" method="GET">
                    <input name="query" placeholder="Search What you want" type="text">
                    <button type="submit">
                        <i class="ti-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-login">
                <ul>
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Reg</a></li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
            <div class="header-cart cart-res">
                <a class="icon-cart" href="{{ route('cart.index') }}">
                    <i class="ti-shopping-cart"></i>
                    <span class="shop-count pink">

                        @auth

                        {{Cart::session(auth()->id())->getContent()->count()}}
                        @else
                        0
                        @endauth
                    </span>
                </a>
                <ul class="cart-dropdown">
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="/assets/img/cart/1.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h5><a href="#"> Bits Headphone</a></h5>
                            <h6><a href="#">Black</a></h6>
                            <span>$80.00 x 1</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#"><i class="ti-trash"></i></a>
                        </div>
                    </li>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="/assets/img/cart/2.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h5><a href="#"> Bits Headphone</a></h5>
                            <h6><a href="#">Black</a></h6>
                            <span>$80.00 x 1</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#"><i class="ti-trash"></i></a>
                        </div>
                    </li>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="/assets/img/cart/3.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h5><a href="#"> Bits Headphone</a></h5>
                            <h6><a href="#">Black</a></h6>
                            <span>$80.00 x 1</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#"><i class="ti-trash"></i></a>
                        </div>
                    </li>
                    <li class="cart-space">
                        <div class="cart-sub">
                            <h4>Subtotal</h4>
                        </div>
                        <div class="cart-price">
                            <h4>$240.00</h4>
                        </div>
                    </li>
                    <li class="cart-btn-wrapper">
                        <a class="cart-btn btn-hover" href="#">view cart</a>
                        <a class="cart-btn btn-hover" href="#">checkout</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mobile-menu-area clearfix d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
            <div class="mobile-menu">
                <nav id="mobile-menu-active">
                    <ul class="menu-overflow">
                        <li><a href="#">HOME</a>
                            {{-- <ul>
                      <li><a href="index.html">Fashion</a></li>
                      <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                      <li><a href="index-fruits.html">Fruits</a></li>
                      <li><a href="index-book.html">book</a></li>
                      <li><a href="index-electronics.html">electronics</a></li>
                      <li><a href="index-electronics-2.html">electronics style 2</a></li>
                      <li><a href="index-food.html">food & drink</a></li>
                      <li><a href="index-furniture.html">furniture</a></li>
                      <li><a href="index-handicraft.html">handicraft</a></li>
                      <li><a href="index-smart-watch.html">smart watch</a></li>
                      <li><a href="index-sports.html">sports</a></li>
                   </ul> --}}
                        </li>
                        <li><a href="#">pages</a>
                            <ul>
                                <li><a href="about-us.html">about us</a></li>
                                <li><a href="menu-list.html">menu list</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="cart.html">cart page</a></li>
                                <li><a href="checkout.html">checkout</a></li>
                                <li><a href="wishlist.html">wishlist</a></li>
                                <li><a href="contact.html">contact</a></li>
                            </ul>
                        </li>
                        <li><a href="#">shop</a>
                            <ul>
                                <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                <li><a href="shop.html">grid 4 column</a></li>
                                <li><a href="shop-grid-box.html">grid box style</a></li>
                                <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                <li><a href="shop-list-box.html">list box style</a></li>
                                <li><a href="product-details.html">tab style 1</a></li>
                                <li><a href="product-details-2.html">tab style 2</a></li>
                                <li><a href="product-details-3.html"> tab style 3</a></li>
                                <li><a href="product-details-4.html">sticky style</a></li>
                                <li><a href="product-details-5.html">sticky style 2</a></li>
                                <li><a href="product-details-6.html">gallery style</a></li>
                                <li><a href="product-details-7.html">gallery style 2</a></li>
                                <li><a href="product-details-8.html">fixed image style</a></li>
                                <li><a href="product-details-9.html">fixed image style 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">BLOG</a>
                            <ul>
                                <li><a href="blog.html">blog 3 colunm</a></li>
                                <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                                <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html"> Contact </a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="slider-area ">
            <div class="slider-active owl-carousel">
                <div class="single-slider single-slider-hm1 bg-img height-100vh"
                    style="background-image: url(/assets/img/slider/15.jpg)">
                    <div class="slider-content slider-animation slider-content-style-1 slider-animated-1">
                        <h1 class="animated">Fashion</h1>
                        <p class="animated">Create you own style for better looks. </p>
                    </div>
                    <div class="position-slider-img">
                        <div class="slider-img-1">
                            <img src="/assets/img/slider/9.png" alt="">
                        </div>
                        <div class="slider-img-2">
                            <img class="tilter" src="/assets/img/slider/fashion_hero_image.png" alt="">
                        </div>
                        <div class="slider-img-3">
                            <img src="/assets/img/slider/8.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="single-slider single-slider-hm1 bg-img height-100vh"
                    style="background-image: url(/assets/img/slider/15.jpg)">
                    <div class="slider-content slider-animation slider-content-style-1 slider-animated-2">
                        <h1 class="animated">Fashion</h1>
                        <p class="animated">Create you own style for better looks. </p>
                    </div>
                    <div class="position-slider-img">
                        <div class="slider-img-1">
                            <img src="/assets/img/slider/9.png" alt="">
                        </div>
                        <div class="slider-img-4 slider-mrg">
                            <img class="tilter" src="/assets/img/slider/fashion_hero_image.png" alt="">
                        </div>
                        <div class="slider-img-3">
                            <img src="/assets/img/slider/8.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- new products arrival section --}}
<div class="product-area pt-115 pb-120">
    <div class="pl-100 pr-100">
        <div class="container-fluid">
            <div class="section-title text-center mb-60">
                <h2>New Arrivals</h2>
            </div>
            <div class="product-style">
                <div class="arrival-active owl-carousel">

                    @foreach ($allProducts as $product)

                    <div class="product-wrapper">
                        <div class="product-img">
                            {{-- <a href="{{route('product.detail',$product->id)}}"> --}}
                            <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                            </a>
                            <span>New</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product->id)}}">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal"
                                    data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.html"> {{$product->name}} </a></h4>
                            <span>$ {{$product->price}}</span>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="product-wrapper">
                   <div class="product-img">
                      <a href="#">
                         <img src="/assets/img/product/fashion-colorful/2.jpg" alt="">
                      </a>
                      <div class="product-action">
                         <a class="animate-left" title="Wishlist" href="#">
                            <i class="pe-7s-like"></i>
                         </a>
                         <a class="animate-top" title="Add To Cart" href="#">
                            <i class="pe-7s-cart"></i>
                         </a>
                         <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal"
                            href="#">
                            <i class="pe-7s-look"></i>
                         </a>
                      </div>
                   </div>
                   <div class="product-content">
                      <h4><a href="product-details.html">Homme Tapered Smart </a></h4>
                      <span>$115.00</span>
                   </div>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{-- second banner area --}}
<div class="banner-area-two">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 col-xl-6">
                <div class="banner-wrapper mrgn-r-4">
                    <a href="#"><img src="/assets/img/banner/4.jpg" alt=""></a>
                    <div class="banner-wrapper-content">
                        <h3>20% <br><span>off</span></h3>
                        <h2><span>Trending</span> <br>Fashion <br>2018...</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="banner-wrapper mrgn-b-4">
                            <a href="#"><img src="/assets/img/banner/5.jpg" alt=""></a>
                            <div class="banner-wrapper-content2">
                                <h3>Winter <br>Collection.</h3>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="banner-wrapper mrgn-r-4">
                                    <a href="#"><img src="/assets/img/banner/6.jpg" alt=""></a>
                                    <div class="banner-wrapper-content3">
                                        <h3><span>new</span> <br>fashion</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-wrapper">
                                    <a href="#"><img src="/assets/img/banner/7.jpg" alt=""></a>
                                    <div class="banner-wrapper-content4">
                                        <h4>25 December.</h4>
                                        <h2>Gift Shop</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- all products section --}}
<div class="container-fluid">
    <div class="section-title text-center mb-60">
        <h2>All Products</h2>
    </div>
    <div class="product-style">
        <div class="product-tab-list text-center mb-95 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="home1">
                <h4>all </h4>
            </a>
            <a href="#home2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home2">
                <h4>woman </h4>
            </a>
            <a href="#home3" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home3">
                <h4>man</h4>
            </a>
            <a href="#home4" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home4">
                <h4>ACCESSORIES</h4>
            </a>
            <a href="#home5" data-toggle="tab" role="tab" aria-selected="false" aria-controls="home5">
                <h4>kids</h4>
            </a>
        </div>
        <div class="tab-content">
            <div class="tab-pane active show fade" id="home1" role="tabpanel">
                <div class="custom-row">

                    @foreach ($allProducts as $product)

                    @include('product._single_product')
                    @endforeach
                    {{-- <div class="custom-col-5 custom-col-style mb-65">
                   <div class="product-wrapper">
                      <div class="product-img">
                         <a href="#">
                            <img src="/assets/img/product/fashion-colorful/2.jpg" alt="">
                         </a>
                         <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                               <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                               <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal"
                               data-target="#exampleModal" href="#">
                               <i class="pe-7s-look"></i>
                            </a>
                         </div>
                      </div>
                      <div class="product-content">
                         <h4><a href="product-details.html">Denim Stonewash</a></h4>
                         <span>$115.00</span>
                      </div>
                   </div>
                </div> --}}

                </div>
            </div>
            <div class="tab-pane fade" id="home2" role="tabpanel">
                <div class="custom-row">
                    @foreach ($allProducts as $product)

                    <div class="custom-col-5 custom-col-style mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                {{-- <a href="{{route('product.detail', $product->id)}}"> --}}
                                <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart"
                                        href="{{route('cart.add', $product->id)}}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal"
                                        data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <span>${{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="home3" role="tabpanel">
                <div class="custom-row">
                    @foreach ($allProducts as $product)

                    <div class="custom-col-5 custom-col-style mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                {{-- <a href="{{route('product.detail', $product->id)}}"> --}}
                                <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart"
                                        href="{{route('cart.add', $product->id)}}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal"
                                        data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <span>${{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="home4" role="tabpanel">
                <div class="custom-row">
                    @foreach ($allProducts as $product)

                    <div class="custom-col-5 custom-col-style mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                {{-- <a href="{{route('product.detail', $product->id)}}"> --}}
                                <img src="//assets/img/product/fashion-colorful/1.jpg" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart"
                                        href="{{route('cart.add', $product->id)}}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal"
                                        data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <span>${{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="tab-pane fade" id="home5" role="tabpanel">
                <div class="custom-row">
                    @foreach ($allProducts as $product)

                    <div class="custom-col-5 custom-col-style mb-65">
                        <div class="product-wrapper">
                            <div class="product-img">
                                {{-- <a href="{{route('product.detail', $product->id)}}"> --}}
                                <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                                </a>
                                <span>hot</span>
                                <div class="product-action">
                                    <a class="animate-left" title="Wishlist" href="#">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a class="animate-top" title="Add To Cart"
                                        href="{{route('cart.add', $product->id)}}">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="animate-right" title="Quick View" data-toggle="modal"
                                        data-target="#exampleModal" href="#">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                <span>${{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

{{-- brand logo --}}
<div class="brand-logo-area pl-100 pr-100">
    <h2 class="text-center">Top Shops</h2>
    <div class="ptb-135 gray-bg">

        <div class="brand-logo-active owl-carousel">
            <div class="single-brand">
                <img src="/assets/img/brand-logo/1.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/2.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/1.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/3.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/4.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/5.png" alt="">
            </div>
            <div class="single-brand">
                <img src="/assets/img/brand-logo/6.png" alt="">
            </div>
        </div>
    </div>
</div>

{{-- banner area3 --}}
<div class="banner-area3 pt-120 pb-115">
    <div class="pl-100 pr-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="banner-wrapper mrgn-negative">
                        <a href="#"><img src="/assets/img/banner/8.jpg" alt=""></a>
                        <div class="banner-wrapper2-content">
                            <h3>Speatial </h3>
                            <h2>Style</h2>
                            <span>Start from $299.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="row no-gutters banner-mrg">
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-b-5 mrgn-r-5 ">
                                <img src="/assets/img/banner/9.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-b-5">
                                <img src="/assets/img/banner/10.jpg" alt="">
                                <div class="banner-wrapper3-content banner-text-color">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper mrgn-r-5">
                                <img src="/assets/img/banner/11.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner-wrapper">
                                <img src="/assets/img/banner/12.jpg" alt="">
                                <div class="banner-wrapper3-content">
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
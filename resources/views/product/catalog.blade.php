@extends('layouts.front')


@section('content')
<header>
   <div class="header-top-furniture wrapper-padding-2 res-header-sm">
      <div class="container-fluid">
         <div class="header-bottom-wrapper">
            <div class="logo-2 furniture-logo ptb-30">
               <a href="index.html">
                  <img src="" alt="APPEDIA">
               </a>
            </div>
            <div class="menu-style-2 furniture-menu menu-hover">
               <nav>
                  <ul>
                     <li><a href="{{route('home')}}">home</a>

                     </li>
                     <li><a href="#">pages</a>
                        <ul class="single-dropdown">
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
                     <li><a href="shop.html">shop</a>
                        <div class="category-menu-dropdown shop-menu">
                           <div class="category-dropdown-style category-common2 mb-30">
                              <h4 class="categories-subtitle"> shop layout</h4>
                              <ul>
                                 <li><a href="shop-grid-2-col.html"> Shop 1</a></li>
                                 <li><a href="shop-grid-3-col.html"> Shop 2</a></li>
                                 <li><a href="shop.html">Shop 3</a></li>

                              </ul>
                           </div>

                           <div class="mega-banner-img">
                              <a href="single-product.html">
                                 <img src="assets/img/banner/18.jpg" alt="">
                              </a>
                           </div>
                        </div>
                     </li>
                     <li><a href="blog.html">blog</a>
                        <ul class="single-dropdown">
                           <li><a href="blog.html">blog 3 colunm</a></li>
                           <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                           <li><a href="blog-sidebar.html">blog sidebar</a></li>
                           <li><a href="blog-details.html">blog details</a></li>
                           <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                        </ul>
                     </li>
                     <li><a href="contact.html">contact</a></li>
                  </ul>
               </nav>
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
                        <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
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
                        <a href="#"><img src="assets/img/cart/2.jpg" alt=""></a>
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
                        <a href="#"><img src="assets/img/cart/3.jpg" alt=""></a>
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
         <div class="row">
            <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
               <div class="mobile-menu">
                  <nav id="mobile-menu-active">
                     <ul class="menu-overflow">
                        <li><a href="#">HOME</a>

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
         </div>
      </div>
   </div>
   <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
      <div class="container-fluid">
         <div class="furniture-bottom-wrapper">
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
            <div class="furniture-search">
               <form action="{{route('products.search')}}" method="GET">
                  <input name="query" placeholder="I am Searching for . . ." type="text">
                  <button type="submit">
                     <i class="ti-search"></i>
                  </button>
               </form>
            </div>
            <div class="furniture-wishlist">
               <ul>
                  <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i>
                        Compare</a></li>
                  <li><a href="wishlist.html"><i class="ti-heart"></i> Wishlist</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- header end -->

<div class="breadcrumb-area pt-205 breadcrumb-padding pb-210"
   style="background-image: url(/assets/img/bg/breadcrumb.jpg)">
   <div class="container-fluid">
      <div class="breadcrumb-content text-center">
         <h2> shop grid</h2>
         <ul>
            <li><a href="#">home</a></li>
            <li>shop grid</li>
         </ul>
      </div>
   </div>
</div>


<div class="shop-page-wrapper shop-page-padding ptb-100">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3">
            <div class="shop-sidebar mr-50">
               <div class="sidebar-widget mb-50">
                  <h3 class="sidebar-title">Search Products</h3>
                  <div class="sidebar-search">
                     <form action="#">
                        <input placeholder="Search Products..." type="text">
                        <button><i class="ti-search"></i></button>
                     </form>
                  </div>
               </div>
               <div class="sidebar-widget mb-40">
                  <h3 class="sidebar-title">Filter by Price</h3>
                  <div class="price_filter">
                     <div id="slider-range"></div>
                     <div class="price_slider_amount">
                        <div class="label-input">
                           <label>price : </label>
                           <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                        </div>
                        <button type="button">Filter</button>
                     </div>
                  </div>
               </div>
               <div class="sidebar-widget mb-45">
                  <h3 class="sidebar-title">Categories</h3>
                  <div class="sidebar-categories">
                     <ul>
                        <li><a href="#">Accessories <span>4</span></a></li>
                        <li><a href="#">Book <span>9</span></a></li>
                        <li><a href="#">Clothing <span>5</span> </a></li>
                        <li><a href="#">Homelife <span>3</span></a></li>
                        <li><a href="#">Kids & Baby <span>4</span></a></li>
                     </ul>
                  </div>
               </div>
               <div class="sidebar-widget sidebar-overflow mb-45">
                  <h3 class="sidebar-title">color</h3>
                  <div class="product-color">
                     <ul>
                        <li class="red">b</li>
                        <li class="pink">p</li>
                        <li class="blue">b</li>
                        <li class="sky">b</li>
                        <li class="green">y</li>
                        <li class="purple">g</li>
                     </ul>
                  </div>
               </div>
               <div class="sidebar-widget mb-40">
                  <h3 class="sidebar-title">size</h3>
                  <div class="product-size">
                     <ul>
                        <li><a href="#">xl</a></li>
                        <li><a href="#">m</a></li>
                        <li><a href="#">l</a></li>
                        <li><a href="#">ml</a></li>
                        <li><a href="#">lm</a></li>
                     </ul>
                  </div>
               </div>
               <div class="sidebar-widget mb-40">
                  <h3 class="sidebar-title">tag</h3>
                  <div class="product-tags">
                     <ul>
                        <li><a href="#">Clothing</a></li>
                        <li><a href="#">Bag</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Tie</a></li>
                        <li><a href="#">Women</a></li>
                     </ul>
                  </div>
               </div>
               <div class="sidebar-widget mb-50">
                  <h3 class="sidebar-title">Top rated products</h3>
                  <div class="sidebar-top-rated-all">
                     <div class="sidebar-top-rated mb-30">
                        <div class="single-top-rated">
                           <div class="top-rated-img">
                              <a href="#"><img src="/assets/img/product/sidebar-product/1.jpg" alt=""></a>
                           </div>
                           <div class="top-rated-text">
                              <h4><a href="#">Flying Drone</a></h4>
                              <div class="top-rated-rating">
                                 <ul>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                 </ul>
                              </div>
                              <span>$140.00</span>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar-top-rated mb-30">
                        <div class="single-top-rated">
                           <div class="top-rated-img">
                              <a href="#"><img src="/assets/img/product/sidebar-product/2.jpg" alt=""></a>
                           </div>
                           <div class="top-rated-text">
                              <h4><a href="#">Flying Drone</a></h4>
                              <div class="top-rated-rating">
                                 <ul>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                 </ul>
                              </div>
                              <span>$140.00</span>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar-top-rated mb-30">
                        <div class="single-top-rated">
                           <div class="top-rated-img">
                              <a href="#"><img src="/assets/img/product/sidebar-product/3.jpg" alt=""></a>
                           </div>
                           <div class="top-rated-text">
                              <h4><a href="#">Flying Drone</a></h4>
                              <div class="top-rated-rating">
                                 <ul>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                 </ul>
                              </div>
                              <span>$140.00</span>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar-top-rated mb-30">
                        <div class="single-top-rated">
                           <div class="top-rated-img">
                              <a href="#"><img src="/assets/img/product/sidebar-product/4.jpg" alt=""></a>
                           </div>
                           <div class="top-rated-text">
                              <h4><a href="#">Flying Drone</a></h4>
                              <div class="top-rated-rating">
                                 <ul>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                    <li><i class="pe-7s-star"></i></li>
                                 </ul>
                              </div>
                              <span>$140.00</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-9">
            <div class="shop-product-wrapper res-xl res-xl-btn">
               <div class="shop-bar-area">
                  <div class="shop-bar pb-60">
                     <div class="shop-found-selector">
                        <div class="shop-found">
                           <p><span>{{$products->total()}}</span> Products Found </p>
                        </div>

                     </div>

                  </div>
                  <div class="shop-product-content tab-content">
                     <div id="grid-sidebar1" class="tab-pane fade active show">
                        <div class="row">
                           @foreach($products as $product)
                           @include('product._single_product')
                           @endforeach

                        </div>
                     </div>

                  </div>
               </div>
            </div>


            {{$products->appends(['query'=>request('query')])->render()}}
         </div>
      </div>
   </div>
</div>

@endsection
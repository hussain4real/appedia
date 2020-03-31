{{-- @include('layouts.front') --}}


<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Appedia E-Commerce</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Favicon -->
   {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> --}}

   <!-- all css here -->
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="/assets/css/animate.css">
   <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="/assets/css/themify-icons.css">
   <link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
   {{-- <link rel="stylesheet" href="/assets/css/icofont.css"> --}}
   <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="/assets/css/jquery-ui.css">
   <link rel="stylesheet" href="/assets/css/bundle.css">
   <link rel="stylesheet" href="/assets/css/style.css">
   <link rel="stylesheet" href="/assets/css/responsive.css">
   <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<!-- header start -->

<body>
   <header>
      <div class="header-top-furniture wrapper-padding-2 res-header-sm">
         <div class="container-fluid">
            <div class="header-bottom-wrapper">
               <div class="logo-2 furniture-logo ptb-30">
                  <a href="{{route('home')}}">
                     <img src="" alt="APPEDIA LOGO">
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
                                    <li><a href="#"> Shop 1</a></li>
                                    <li><a href="#"> Shop 2</a></li>

                                 </ul>
                              </div>

                              <div class="mega-banner-img">
                                 <a href="single-product.html">
                                    <img src="/assets/img/banner/18.jpg" alt="">
                                 </a>
                              </div>
                           </div>
                        </li>
                        <li><a href="blog.html">blog</a>

                        </li>
                        <li><a href="contact.html">contact</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="header-cart">
                  <a class="icon-cart-furniture" href="#">
                     <i class="ti-shopping-cart"></i>
                     <span class="shop-count-furniture green">02</span>
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
            <div class="row">
               <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                  <div class="mobile-menu">
                     <nav id="mobile-menu-active">
                        <ul class="menu-overflow">
                           <li><a href="#">HOME</a>
                              <ul>
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
                              </ul>
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
               <div class="furniture-login">
                  <ul>
                     <li>Get Access: <a href="login.html">Login </a></li>
                     <li><a href="register.html">Reg </a></li>
                  </ul>
               </div>
               <div class="furniture-search">
                  <form action="#">
                     <input placeholder="I am Searching for . . ." type="text">
                     <button>
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
   <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(/assets/img/bg/breadcrumb.jpg)">
      <div class="container">
         <div class="breadcrumb-content text-center">
            <h2>product details</h2>
            <ul>
               <li><a href="{{route('home')}}">home</a></li>
               <li> product details </li>
            </ul>
         </div>
      </div>
   </div>

   {{-- main area to be edited --}}
   <div class="product-details ptb-100 pb-90">
      <div class="container">
         <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
               <div class="product-details-img-content">
                  <div class="product-details-tab mr-70">
                     <div class="product-details-large tab-content">
                        <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                           <div class="easyzoom easyzoom--overlay">
                              <a href="{{Voyager::image($productDetails->cover_img)}}">
                                 <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                           <div class="easyzoom easyzoom--overlay">
                              <a href="{{Voyager::image($productDetails->cover_img)}}">
                                 <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                           <div class="easyzoom easyzoom--overlay">
                              <a href="{{Voyager::image($productDetails->cover_img)}}">
                                 <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                           <div class="easyzoom easyzoom--overlay">
                              <a href="{{Voyager::image($productDetails->cover_img)}}">
                                 <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="product-details-small nav mt-12" role=tablist>
                        <a class="active mr-12" href="#pro-details1" data-toggle="tab" role="tab" aria-selected="true">
                           <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                        </a>
                        <a class="mr-12" href="#pro-details2" data-toggle="tab" role="tab" aria-selected="true">
                           <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                        </a>
                        <a class="mr-12" href="#pro-details3" data-toggle="tab" role="tab" aria-selected="true">
                           <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                        </a>
                        <a class="mr-12" href="#pro-details4" data-toggle="tab" role="tab" aria-selected="true">
                           <img src="{{Voyager::image($productDetails->cover_img)}}" alt="">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
               <div class="product-details-content">
                  <h3>{{$productDetails->name}}</h3>
                  <div class="rating-number">
                     <div class="quick-view-rating">
                        <i class="pe-7s-star red-star"></i>
                        <i class="pe-7s-star red-star"></i>
                        <i class="pe-7s-star"></i>
                        <i class="pe-7s-star"></i>
                        <i class="pe-7s-star"></i>
                     </div>
                     <div class="quick-view-number">
                        <span>2 Ratting (S)</span>
                     </div>
                  </div>
                  <div class="details-price">
                     <span>${{$productDetails->price}}</span>
                  </div>
                  <p>{{$productDetails->description}}</p>
                  <div class="quick-view-select">
                     <div class="select-option-part">
                        <label>Size*</label>
                        <select class="select">
                           <option value="">- Please Select -</option>
                           <option value="">xl</option>
                           <option value="">ml</option>
                           <option value="">m</option>
                           <option value="">sl</option>
                        </select>
                     </div>
                     <div class="select-option-part">
                        <label>Color*</label>
                        <select class="select">
                           <option value="">- Please Select -</option>
                           <option value="">orange</option>
                           <option value="">pink</option>
                           <option value="">yellow</option>
                        </select>
                     </div>
                  </div>
                  <div class="quickview-plus-minus">
                     <div class="cart-plus-minus">
                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                     </div>
                     <div class="quickview-btn-cart">
                        <a class="btn-hover-black" href="#">add to cart</a>
                     </div>
                     <div class="quickview-btn-wishlist">
                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                     </div>
                  </div>
                  <div class="product-details-cati-tag mt-35">
                     <ul>
                        <li class="categories-title">Categories :</li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">electronics</a></li>
                        <li><a href="#">toys</a></li>
                        <li><a href="#">food</a></li>
                        <li><a href="#">jewellery</a></li>
                     </ul>
                  </div>
                  <div class="product-details-cati-tag mtb-10">
                     <ul>
                        <li class="categories-title">Tags :</li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">electronics</a></li>
                        <li><a href="#">toys</a></li>
                        <li><a href="#">food</a></li>
                        <li><a href="#">jewellery</a></li>
                     </ul>
                  </div>
                  <div class="product-share">
                     <ul>
                        <li class="categories-title">Share :</li>
                        <li>
                           <a href="#">
                              <i class="icofont icofont-social-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="icofont icofont-social-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="icofont icofont-social-pinterest"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <i class="icofont icofont-social-flikr"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   {{-- will comeback and implement you --}}
   <div class="product-description-review-area pb-90">
      <div class="container">
         <div class="product-description-review text-center">
            <div class="description-review-title nav" role=tablist>
               <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                  Description
               </a>
               <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                  Reviews (0)
               </a>
            </div>
            <div class="description-review-text tab-content">
               <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                  <p>{{$productDetails->description}}</p>
               </div>
               <div class="tab-pane fade" id="pro-review" role="tabpanel">
                  <a href="#">Be the first to write your review!</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- product area start -->
   <div class="product-area pb-95">
      <div class="container">
         <div class="section-title-3 text-center mb-50">
            <h2>Related products</h2>
         </div>
         <div class="product-style">
            <div class="related-product-active owl-carousel">
               <div class="product-wrapper">
                  <div class="product-img">
                     <a href="#">
                        <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                     </a>
                     <span>hot</span>
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
                     <h4><a href="#">Arifo Stylas Dress</a></h4>
                     <span>$115.00</span>
                  </div>
               </div>
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
                        <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal"
                           href="#">
                           <i class="pe-7s-look"></i>
                        </a>
                     </div>
                  </div>
                  <div class="product-content">
                     <h4><a href="#">Arifo Stylas Dress</a></h4>
                     <span>$115.00</span>
                  </div>
               </div>
               <div class="product-wrapper">
                  <div class="product-img">
                     <a href="#">
                        <img src="/assets/img/product/fashion-colorful/3.jpg" alt="">
                     </a>
                     <span>hot</span>
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
                     <h4><a href="#">Arifo Stylas Dress</a></h4>
                     <span>$115.00</span>
                  </div>
               </div>
               <div class="product-wrapper">
                  <div class="product-img">
                     <a href="#">
                        <img src="/assets/img/product/fashion-colorful/4.jpg" alt="">
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
                     <h4><a href="#">Arifo Stylas Dress</a></h4>
                     <span>$115.00</span>
                  </div>
               </div>
               <div class="product-wrapper">
                  <div class="product-img">
                     <a href="#">
                        <img src="/assets/img/product/fashion-colorful/5.jpg" alt="">
                     </a>
                     <span>hot</span>
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
                     <h4><a href="#">Arifo Stylas Dress</a></h4>
                     <span>$115.00</span>
                  </div>
               </div>
               <div class="product-wrapper">
                  <div class="product-img">
                     <a href="#">
                        <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
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
                     <h4><a href="#">Arifo Stylas Dress</a></h4>
                     <span>$115.00</span>
                  </div>
               </div>
               <div class="product-wrapper">
                  <div class="product-img">
                     <a href="#">
                        <img src="/assets/img/product/fashion-colorful/2.jpg" alt="">
                     </a>
                     <span>hot</span>
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
                     <h4><a href="#">Arifo Stylas Dress</a></h4>
                     <span>$115.00</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- product area end -->
   <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
   <script src="/assets/js/popper.js"></script>
   <script src="/assets/js/bootstrap.min.js"></script>
   <script src="/assets/js/jquery.magnific-popup.min.js"></script>
   <script src="/assets/js/isotope.pkgd.min.js"></script>
   <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="/assets/js/jquery.counterup.min.js"></script>
   <script src="/assets/js/waypoints.min.js"></script>
   <script src="/assets/js/ajax-mail.js"></script>
   <script src="/assets/js/owl.carousel.min.js"></script>
   <script src="/assets/js/plugins.js"></script>
   <script src="/assets/js/main.js"></script>
</body>

@section('content')
@endsection
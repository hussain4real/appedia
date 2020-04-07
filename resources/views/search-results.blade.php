@extends('layout')

@section('title', 'Search Results')

@section('extra-css')

@endsection

@section('content')

<div class="breadcrumbs">
   <div class="container">
      <a href="/">Home</a>
      <i class="fa fa-chevron-right breadcrumb-separator"></i>
      <span>Search</span>
   </div>
</div> <!-- end breadcrumbs -->

<div class="container">

   @if (session()->has('success_message'))
   <div class="alert alert-success">
      {{ session()->get('success_message') }}
   </div>
   @endif

   @if(count($errors) > 0)
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
   @endif
</div>


<!-- all css here -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/themify-icons.css">
<link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="/assets/css/icofont.css">
<link rel="stylesheet" href="/assets/css/meanmenu.min.css">
<link rel="stylesheet" href="/assets/css/jquery-ui.css">
<link rel="stylesheet" href="/assets/css/bundle.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

<div class="search-container container">
   <div class="spacer"></div>
   <h1>Search Results</h1>
   <p>{{$products->total()}} results for '{{request()->input('query')}}'</p>
   <div class="spacer"></div>
   <p>showing {{$products->count()}} results per page</p>


</div> <!-- end search-container -->



{{-- new design --}}

<div class="shop-page-wrapper shop-page-padding ptb-100">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3">
            <div class="shop-sidebar mr-50">

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
                           <div class="products-section container">
                              <div class="products text-center">


                                 @forelse ($products as $product)
                                 <div class="product">
                                    <div class="rating-comment">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                       <p class="comment-count">105 reviews</p>
                                       <p class="new">New</p>
                                    </div>
                                    <a href="{{route('product.show', $product->id)}}"><img
                                          src="{{ productImage($product->cover_img)}}" alt="product"></a>

                                    <div class="product-name"><a
                                          href="{{route('product.show', $product->id)}}">{{$product->name}}</a></div>

                                    <div class="product-details">Brief introduction or product description goes here
                                    </div>
                                    <div class="price-shop">

                                       <div class="product-price">${{$product->price}}</div>

                                       <div class="shop-now"><a href="{{route('cart.add', $product->id)}}">Shop now</a>
                                       </div>
                                       <div class="cart">
                                          {{-- <img src="/img/shopping-cart.svg" alt="shopping-cart" class="filter-yellow"> --}}
                                          <svg height="16px" viewBox="0 -13 456.75885 456" width="16px"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path id="time-3-icon"
                                                d="m150.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0" />
                                             <path id="time-3-icon"
                                                d="m446.855469 94.035156h-353.101563l-7.199218-40.300781c-4.4375-24.808594-23.882813-44.214844-48.699219-48.601563l-26.101563-4.597656c-5.441406-.96875-10.632812 2.660156-11.601562 8.097656-.964844 5.441407 2.660156 10.632813 8.101562 11.601563l26.199219 4.597656c16.53125 2.929688 29.472656 15.871094 32.402344 32.402344l35.398437 199.699219c4.179688 23.894531 24.941406 41.324218 49.199219 41.300781h210c22.0625.066406 41.546875-14.375 47.902344-35.5l47-155.800781c.871093-3.039063.320312-6.3125-1.5-8.898438-1.902344-2.503906-4.859375-3.980468-8-4zm-56.601563 162.796875c-3.773437 12.6875-15.464844 21.367188-28.699218 21.300781h-210c-14.566407.039063-27.035157-10.441406-29.5-24.800781l-24.699219-139.398437h336.097656zm0 0" />
                                             <path id="time-3-icon"
                                                d="m360.355469 322.332031c-30.046875 0-54.402344 24.355469-54.402344 54.402344 0 30.042969 24.355469 54.398437 54.402344 54.398437 30.042969 0 54.398437-24.355468 54.398437-54.398437-.03125-30.03125-24.367187-54.371094-54.398437-54.402344zm0 88.800781c-19 0-34.402344-15.402343-34.402344-34.398437 0-19 15.402344-34.402344 34.402344-34.402344 18.996093 0 34.398437 15.402344 34.398437 34.402344 0 18.996094-15.402344 34.398437-34.398437 34.398437zm0 0" />
                                          </svg>



                                       </div>
                                    </div>
                                 </div>
                                 @empty
                                 <div style="text-align: left">No items found</div>
                                 @endforelse

                              </div>
                           </div> <!-- end products -->

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



{{-- @include('partials.might-like') --}}

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
@endsection
<body>
    <header>
        @include('partials.nav')

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
        <div class="with-background">


            {{-- <div class="top-nav container">
                    <div class="logo">Laravel Ecommerce</div>
                    <ul>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Cart <span class="cart-count"><span>3</span></span></a></li>
                    </ul>
                </div> <!-- end top-nav --> --}}
            <div class="hero-container">

                <div>
                    <h2 class="hero-big-heading">Strong and Catchy Value Proposition Statement</h2>
                    <p class="hero-small-heading">Fast and secure product delivery</p>


                </div>


                <div class="hero-copy">
                    <div class="hero-newsletter">
                        <h4>Coming Soon</h4>
                        <p>Subscribe to our newsletter to know when the product becomes available locally</p>
                        <div class="search">
                            <input type="text" name="query" id="emailQuery" class="searchTerm"
                                value="{{request()->input('query')}}" placeholder="Your Email Address Here">
                            <button type="submit" class="searchButton">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>

                    <div class="hero-image">
                        <div>
                            <p>Limited Edition</p>
                        </div>

                    </div> <!-- end hero-image -->
                </div> <!-- end hero-copy -->

            </div> <!-- end hero -->
        </div>

    </header>

    <div class="featured-section">

        <div class="container">
            <div class="text-center" id="featured">Featured Products</div>


            {{-- <div class="tabs">
                    <div class="tab">
                        Featured
                    </div>
                    <div class="tab">
                        On Sale
                    </div>
                </div> --}}

            <div class="products ">
                @foreach ($products as $product)

                <div class="product">
                    <div class="rating-comment">
                        @php $rating =$product->getStarRating() ; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach



                        {{-- <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fas fa-star-half-alt"></i> --}}
                        <p class="comment-count">{{$product->reviews->count()}} reviews</p>

                        <p class="new"><em> {{$product->status}} </em></p>

                    </div>
                    <a href="{{route('product.show', $product->id)}}"><img src="{{ productImage($product->cover_img)}}"
                            alt="product"></a>

                    <div class="product-name"><a href="{{route('product.show', $product->id)}}">{{$product->name}}</a>
                    </div>

                    <div class="product-details">Brief introduction or product description goes here</div>
                    <div class="price-shop">

                        <div class="product-price">QR {{$product->price}}</div>

                        <div class="shop-now"><a href="{{route('cart.add', $product->id)}}">Shop now</a></div>
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

                            {{-- filter: invert(54%) sepia(99%) saturate(330%) hue-rotate(357deg) brightness(91%)
                            contrast(93%); --}}
                            {{-- <i class="fas fa-cart-arrow-down"> --}}
                        </div>
                    </div>
                    @if ($product->shop)

                    <div class="seller">sold by <em>{{$product->shop->name}}</em></div>
                    @endif
                </div>
                @endforeach


            </div> <!-- end products -->

            <div class="category-container">
                <div class="best-of-2020-wrapper">

                    <div class="best-of-2020">Best of 2020</div>
                </div>
                <div class="categories">



                    @foreach ($categories as $category)
                    @if ($category->slug == 'clothing')
                    <a href="{{route('products.index', ['category' => $category->slug])}}">
                        <img src="/img/tshirt.svg" alt="clothing">
                        <h4>{{$category->name}}</h4>
                    </a>

                    @endif
                    @endforeach


                    @foreach ($categories as $category)
                    @if ($category->slug == 'shoes')
                    <a href="{{route('products.index', ['category' => $category->slug])}}">
                        <img src="/img/shoe-prints.svg" alt="">
                        <h4>{{$category->name}}</h4>
                    </a>

                    @endif
                    @endforeach


                    @foreach ($categories as $category)
                    @if ($category->slug == 'accessories')
                    <a href="{{route('products.index', ['category' => $category->slug])}}">
                        <img src="/img/glasses-alt.svg" alt="">
                        <h4>{{$category->name}}</h4>
                    </a>
                    @endif
                    @endforeach


                    @foreach ($categories as $category)
                    @if ($category->slug == 'bags')
                    <a href="{{route('products.index', ['category' => $category->slug])}}">
                        <svg height="53px" viewBox="0 -24 480 480" width="50px" xmlns="http://www.w3.org/2000/svg">
                            <path id="bag"
                                d="m456 72h-104v-32c-.027344-22.082031-17.917969-39.9726562-40-40h-144c-22.082031.0273438-39.972656 17.917969-40 40v32h-104c-13.253906 0-24 10.746094-24 24v178.078125c.0507812 10.148437 6.445312 19.175781 16 22.585937v111.335938c0 13.253906 10.746094 24 24 24h400c13.253906 0 24-10.746094 24-24v-111.328125c9.554688-3.414063 15.953125-12.445313 16-22.59375v-178.078125c0-13.253906-10.746094-24-24-24zm-312-32c0-13.253906 10.746094-24 24-24h144c13.253906 0 24 10.746094 24 24v32h-16v-32c0-4.417969-3.582031-8-8-8h-144c-4.417969 0-8 3.582031-8 8v32h-16zm160 32h-128v-24h128zm144 336c0 4.417969-3.582031 8-8 8h-400c-4.417969 0-8-3.582031-8-8v-108.585938l176 24.273438v20.3125c0 13.253906 10.746094 24 24 24h16c13.253906 0 24-10.746094 24-24v-20.3125l176-24.273438zm-192-64c0 4.417969-3.582031 8-8 8h-16c-4.417969 0-8-3.582031-8-8v-48c0-4.417969 3.582031-8 8-8h16c4.417969 0 8 3.582031 8 8zm208-69.921875c.003906 3.988281-2.929688 7.371094-6.878906 7.929687l-2.21875.304688-182.902344 25.222656v-11.535156c0-13.253906-10.746094-24-24-24h-16c-13.253906 0-24 10.746094-24 24v11.535156l-185.113281-25.527344c-3.949219-.554687-6.890625-3.9375-6.886719-7.929687v-178.078125c0-4.417969 3.582031-8 8-8h432c4.417969 0 8 3.582031 8 8zm0 0" />
                        </svg>


                        <h4>{{$category->name}}</h4>
                    </a>
                    @endif
                    @endforeach



                </div>
                <div class="products">
                    @foreach ($productCat as $cat)

                    <div class="product">
                        <div class="rating-comment">
                            @php $rating =$product->getStarRating() ; @endphp

                            @foreach(range(1,5) as $i)
                            <span class="fa-stack" style="width:1em">
                                <i class="far fa-star fa-stack-1x"></i>

                                @if($rating >0)
                                @if($rating >0.5)
                                <i class="fas fa-star fa-stack-1x"></i>
                                @else
                                <i class="fas fa-star-half fa-stack-1x"></i>
                                @endif
                                @endif
                                @php $rating--; @endphp
                            </span>
                            @endforeach



                            {{-- <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fas fa-star-half-alt"></i> --}}
                            <p class="comment-count">{{$product->reviews->count()}} reviews</p>

                            <p class="new"><em> {{$product->status}} </em></p>
                        </div>
                        <a href="{{route('product.show', $cat->id)}}"><img src="{{ productImage($cat->cover_img)}}"
                                alt="product"></a>

                        <div class="product-name"><a href="{{route('product.show', $cat->id)}}">{{$cat->name}}</a>
                        </div>

                        <div class="product-details">Brief introduction or product description goes here</div>
                        <div class="price-shop">

                            <div class="product-price">QR {{$cat->price}}</div>

                            <div class="shop-now"><a href="{{route('cart.add', $cat->id)}}">Shop now</a></div>
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

                                {{-- filter: invert(54%) sepia(99%) saturate(330%) hue-rotate(357deg) brightness(91%)
                                contrast(93%); --}}
                                {{-- <i class="fas fa-cart-arrow-down"> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div> <!-- end category-container-->



        </div> <!-- end container -->

    </div> <!-- end featured-section -->



    @include('partials.footer')
</body>

</html>

<Script>
    (function () {
            const backgroundImg = document.querySelector('.hero-container');
            // const navLinks = document.querySelector('.top-nav-links');
            const links =document.querySelectorAll('li');

            window.addEventListener('load', () => {
                // navLinks.classList.toggle('open');
                backgroundImg.classList.add('fadein');

                console.log('clicked');
            });

        })();
</Script>
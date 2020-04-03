<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Ecommerce Example</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<header>
    <div class="top-header-container">
        <div class="logo">

            LOGO
        </div>
        <div class="other-container">

            <div class="wrap">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <ul>
                <li><a href="#">Login</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><i class="fas fa-user"></i></li>
                <li><a href="{{route('cart.index')}}"><i class="fas fa-shopping-cart">
                            @if (Cart::session(auth()->id())->getContent()->count() > 0)

                            <span
                                class="cart-count"><span>{{Cart::session(auth()->id())->getContent()->count()}}</span></span>
                            @endif
                        </i>
                    </a>
                </li>
            </ul>





        </div>
    </div>
    <div class="top-nav container">

        @if (! request()->is('checkout'))
        <ul>
            <li><a href="{{route('products.index')}}">Shop</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">Men </a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Kids</a></li>
            <li><a href="#">Furniture</a></li>
            <li><a href="/">Home</a></li>
        </ul>
        @endif
    </div> <!-- end top-nav -->
</header>

</html>
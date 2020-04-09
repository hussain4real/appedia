@php
use App\Category;
@endphp

<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Al Mossem</title>

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
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="top-header-container">
        <div class="logo">

            LOGO
        </div>
        <div class="other-container">

            @include('partials.search')

            <ul>
                @guest

                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Sign Up</a></li>
                @else
                <li>
                <li>
                    <a href="{{route('users.edit')}}">
                        My Account
                    </a>
                </li>
                {{-- remove the 'dropdown-item' from this 'a' tag --}}
                <a class="logout-now " href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                @endguest
                <li><i class="fas fa-user"></i></li>
                <li><a href="{{route('cart.index')}}"><i class="fas fa-shopping-cart">
                            @if (Cart::getContent()->count() > 0)
                            {{-- session(auth()->id())-> --}}

                            <span
                                class="cart-count"><span>{{Cart::session(auth()->id())->getContent()->count()}}</span></span>
                            @endif
                        </i>
                    </a>
                </li>
            </ul>





        </div>
    </div>
    <nav class="top-nav container">

        @if (! request()->is('checkout'))
        <ul class="top-nav-links">
            <li><a href="{{route('products.index')}}">Shop</a></li>
            <li><a href="#">Arrivals</a></li>

            @php

            $categories = Category::all();

            @endphp
            @foreach ($categories as $category)
            @if ($category->slug == 'men')
            <li><a href="{{route('products.index', ['category' => $category->slug])}}">{{$category->name}} </a></li>
            @endif
            @endforeach

            @foreach ($categories as $category)
            @if ($category->slug == 'women')
            <li><a href="{{route('products.index', ['category' => $category->slug])}}">{{$category->name}} </a></li>
            @endif
            @endforeach


            @foreach ($categories as $category)
            @if ($category->slug == 'kids')
            <li><a href="{{route('products.index', ['category' => $category->slug])}}">{{$category->name}} </a></li>
            @endif
            @endforeach


            <li><a href="#">Furniture</a></li>
            <li><a href="/">Home</a></li>
        </ul>
        @endif
    </nav> <!-- end top-nav -->
</header>

</html>
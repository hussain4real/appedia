@php
use App\Category;
@endphp

<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Housemall</title>

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
            <svg xmlns="http://www.w3.org/2000/svg" width="153.633" height="51.42" viewBox="0 0 153.633 51.42">
                <defs>
                    <style>
                        .a {
                            fill: #dfcdab;
                        }

                        .b {
                            fill: #191919;
                        }
                    </style>
                </defs>
                <g transform="translate(-368.44 -48)">
                    <g transform="translate(117.046 21)">
                        <path class="a"
                            d="M32.556,14.244,25.572,2.419a5.006,5.006,0,0,0-8.571,0L9.065,15.856a4.983,4.983,0,0,1-4.176,2.418,1.625,1.625,0,0,1-1.361-.805,1.555,1.555,0,0,1,0-1.613L10.512,4.031a1.669,1.669,0,0,1,2.858,0l.07.119L15.1,1.344c.03-.051.065-.1.1-.146A5.009,5.009,0,0,0,7.655,2.419L.671,14.244a4.7,4.7,0,0,0,0,4.838,4.9,4.9,0,0,0,3.874,2.4,1.69,1.69,0,0,0,.235.016h.178c.049,0,.1,0,.147-.006a8.3,8.3,0,0,0,6.818-4.025L19.858,4.031a1.669,1.669,0,0,1,2.858,0L29.7,15.856a1.556,1.556,0,0,1,0,1.613,1.626,1.626,0,0,1-1.361.805,4.983,4.983,0,0,1-4.176-2.418L19.788,8.45l-1.9,3.224,3.423,5.794a8.3,8.3,0,0,0,6.818,4.025c.049,0,.1.006.147.006h.178a1.677,1.677,0,0,0,.234-.016,4.9,4.9,0,0,0,3.874-2.4,4.7,4.7,0,0,0,0-4.838"
                            transform="translate(405.027 48.5) rotate(180)" />
                    </g>
                    <path class="b"
                        d="M-49.42-19.81h7.28V0H-44.8l-.63-1.61A6.261,6.261,0,0,1-49.56.42h-.42A7.111,7.111,0,0,1-52.36,0a6.381,6.381,0,0,1-2.135-1.26A5.922,5.922,0,0,1-56-3.43a8.288,8.288,0,0,1-.56-3.22V-42.28A8.288,8.288,0,0,1-56-45.5a5.922,5.922,0,0,1,1.505-2.17,6.381,6.381,0,0,1,2.135-1.26,7.111,7.111,0,0,1,2.38-.42h1.26a7.111,7.111,0,0,1,2.38.42,6.381,6.381,0,0,1,2.135,1.26A5.922,5.922,0,0,1-42.7-45.5a8.288,8.288,0,0,1,.56,3.22v13.09H-47.6V-41.51a5.31,5.31,0,0,0-.42-2.52,1.318,1.318,0,0,0-1.19-.7h-.28A1.309,1.309,0,0,0-50.68-44a5.544,5.544,0,0,0-.42,2.555V-7.49a5.544,5.544,0,0,0,.42,2.555,1.309,1.309,0,0,0,1.19.735h.28a1.309,1.309,0,0,0,1.19-.735A5.544,5.544,0,0,0-47.6-7.49v-7.7h-1.82Zm14.443-29.12v44.8h5.81V0h-11.27V-48.93Zm15.353,35.98h-3.85L-24.523,0h-4.69l4.34-48.93h7L-13.253,0H-18.5Zm-3.5-4.06h3.15l-1.47-16.8h-.21ZM7.7-48.93V0H3.15V-31.99H3.08L-.42,0H-4.41L-7.84-31.99h-.14V0h-4.55V-48.93h7.07L-2.52-21h.14L.7-48.93ZM15.983.42A7.111,7.111,0,0,1,13.6,0a6.381,6.381,0,0,1-2.135-1.26,5.922,5.922,0,0,1-1.5-2.17A8.288,8.288,0,0,1,9.4-6.65V-42.28a8.288,8.288,0,0,1,.56-3.22,5.922,5.922,0,0,1,1.5-2.17A6.381,6.381,0,0,1,13.6-48.93a7.111,7.111,0,0,1,2.38-.42h1.26a7.111,7.111,0,0,1,2.38.42,6.381,6.381,0,0,1,2.135,1.26,5.922,5.922,0,0,1,1.5,2.17,8.288,8.288,0,0,1,.56,3.22V-6.65a8.288,8.288,0,0,1-.56,3.22,5.922,5.922,0,0,1-1.5,2.17A6.381,6.381,0,0,1,19.623,0a7.111,7.111,0,0,1-2.38.42Zm.49-45.15q-1.61,0-1.61,3.29V-7.49a5.544,5.544,0,0,0,.42,2.555,1.309,1.309,0,0,0,1.19.735h.28a1.309,1.309,0,0,0,1.19-.735,5.544,5.544,0,0,0,.42-2.555V-41.44q0-3.29-1.61-3.29ZM32.145.42A7.626,7.626,0,0,1,29.776.035a5.654,5.654,0,0,1-2.125-1.26A6.673,6.673,0,0,1,26.119-3.43a7.888,7.888,0,0,1-.592-3.22V-48.93h5.46V-7.49a5.544,5.544,0,0,0,.42,2.555A1.309,1.309,0,0,0,32.6-4.2h.35a1.26,1.26,0,0,0,1.12-.735,5.544,5.544,0,0,0,.42-2.555V-48.93h5.46V-6.65a8.324,8.324,0,0,1-.557,3.22,5.921,5.921,0,0,1-1.5,2.17A6.346,6.346,0,0,1,35.767,0a7.242,7.242,0,0,1-2.439.42ZM56.07-29.19a6.308,6.308,0,0,1-.691,3.325,3.3,3.3,0,0,1-1.728,1.435,2.965,2.965,0,0,1,1.728,1.365,6.309,6.309,0,0,1,.691,3.325V-8.75q0,2.38.1,3.99t.245,2.625A11.869,11.869,0,0,0,56.7-.63a4.632,4.632,0,0,0,.21.63H51.439a7.541,7.541,0,0,1-.656-2.905Q50.61-4.97,50.61-8.75v-10.5q0-3.15-1.4-3.15h-2.1V0H41.65V-48.93h7.872a6.482,6.482,0,0,1,4.633,1.82,6.8,6.8,0,0,1,1.916,5.18Zm-6.86,2.73q1.4,0,1.4-3.08V-41.09q0-3.22-1.61-3.22H47.11v17.85Z"
                        transform="translate(425 99)" />
                </g>
            </svg>
            {{-- HOUSEMALL --}}
        </div>
        <div class="other-container">

            @include('partials.search')

            <ul>
                @guest

                <div class="login">
                    <li><a href="{{route('login')}}">Login</a></li>

                </div>
                <div class="login">
                    <li><a href="{{route('register')}}">Sign Up</a></li>
                </div>
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
                <li class="user">
                    <i class="fas fa-user"></i>

                </li>
                <li class="cart"><a href="{{route('cart.index')}}">
                        <i class="fas fa-shopping-cart">
                            @if (Cart::getContent()->count() > 0)
                            {{-- session(auth()->id())-> --}}

                            <span class="cart-count"><span>{{Cart::getContent()->count()}}</span></span>
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




<Script>
    (function () {
            const hamburger = document.querySelector('.hamburger');
            const navLinks = document.querySelector('.top-nav-links');
            const links =document.querySelectorAll('.top-nav-links li');

            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('open');
                links.forEach(link =>{
                    link.classList.toggle('fade');
                });
            });
        })();
</Script>


</html>
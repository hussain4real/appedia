@php
use App\Category;
@endphp

<footer>
    <div class="footer-content container">
        <ul class="logo-contact-wrapper">
            <h1>HOUSEMALL</h1>
            <h2>Contact Us</h2>
            <li>info@storename.com</li>
            <li>City,Physical Address, <br> postal code ####</li>
            <li>+974 0000 0000</>
        </ul>
        <ul class="brand-wrapper">
            <div class="h2-span-wrapper">

                <h2>Brands <span class="arrow">></span></h2>
            </div>
            <li><a>Name </a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
        </ul>
        <ul class="footer-categories-wrapper">
            <div class="h2-span-wrapper">
                <h2>Categories <span class="arrow-cat">></span></h2>
            </div>

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
        </ul>
        <ul class="footer-main">
            <div class="h2-span-wrapper">
                <h2>Main <span class="arrow">></span></h2>
            </div>
            <li><a>Name </a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
        </ul>
        <ul class="footer-help">
            <div class="h2-span-wrapper">
                <h2>Help <span class="arrow">></span></h2>
            </div>
            <li><a>Name </a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
            <li><a>Name</a></>
        </ul>


    </div> <!-- end footer-content -->


    <div class="footer-newsletter">
        <p>Subscribe to our Newsletter</p>
        <div class="search">
            <input type="text" name="query" id="emailQuery" class="searchTerm" value="{{request()->input('query')}}"
                placeholder="Your Email Address Here">
            <button type="submit" class="searchButton">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
    <div class="footer-credit ">
        <div class="reserved-rights">© 2020 Store Name <span> All Rights Reserved</span></div>
        <div class="payment">Cash on <span>Delivery</span></div>
        <div class="footer-social container">
            <ul>
                <li>
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
        </div>
    </div>
</footer>

@include('partials.mobile-footer')

<Script>
    (function () {
            const arrowCat = document.querySelector('.arrow-cat');
            // const navLinks = document.querySelector('.top-nav-links');
            const links =document.querySelectorAll('li');

            if (arrowCat) {

            arrowCat.addEventListener('click', () => {
                // navLinks.classList.toggle('open');
                links.forEach(link =>{
                    link.classList.toggle('open');
                });
                console.log('clicked');
            });
            }
        })();
</Script>
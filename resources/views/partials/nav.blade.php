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
                <li><i class="fas fa-shopping-cart"><span class="cart-count"><span>3</span></span></i></li>
            </ul>





        </div>
    </div>
    <div class="top-nav container">

        @if (! request()->is('checkout'))
        <ul>
            <li><a href="#">Shop</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="#">Men </a></li>
            <li><a href="#">Women</a></li>
            <li><a href="#">Kids</a></li>
            <li><a href="#">Furniture</a></li>
            <li><a href="#">Home</a></li>
        </ul>
        @endif
    </div> <!-- end top-nav -->
</header>
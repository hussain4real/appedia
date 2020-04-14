<div class="mobile-footer">
   <ul class="container">
      <li>
         <a href="/"><img src="/img/mobile-home.svg" alt=""></a>
         <h4>Home</h4>
      </li>


      <li>
         <a href="{{route('products.index')}}">
            <img src="/img/mobile-categories.svg" alt="">
         </a>
         <h4>Categories</h4>
      </li>
      <li>
         <a href=""><img src="/img/mobile-search.svg" alt=""></a>
         <h4>Search</h4>
      </li>
      <li>
         <a href="{{route('cart.index')}}">
            <img src="/img/mobile-bag.svg" alt="">
            @if (Cart::getContent()->count() > 0)
            {{-- session(auth()->id())-> --}}

            <span class="cart-count"><span>{{Cart::getContent()->count()}}</span></span>
            @endif
            </i>
         </a>
         <h4>Cart</h4>
      </li>

      @guest

      <li><a href="{{route('login')}}">
            <img src="/img/mobile-user.svg" alt="">
         </a>
         <h4>Login</h4>
      </li>


      @else
      <li>
         <a href="{{route('users.edit')}}"><img src="/img/mobile-user.svg" alt=""></a>
         <h4>Account</h4>
      </li>
      @endguest
   </ul>
</div>
<div class="custom-col-5 custom-col-style mb-65">
   <div class="product-wrapper">
      <div class="product-img">
         {{-- <a href="{{route('product.detail', $productDetails->id)}}"> --}}
         <a href="#">
            <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
         </a>
         <span>hot</span>
         <div class="product-action">
            <a class="animate-left" title="Wishlist" href="">
               <i class="pe-7s-like"></i>
            </a>
            <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product->id)}}">
               <i class="pe-7s-cart"></i>
            </a>
            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal"
               href="{{route('cart.add', $product->id)}}">
               <i class="pe-7s-look"></i>
            </a>
         </div>
      </div>
      <div class="product-content">
         <h4><a href="product-details.html">{{$product->name}}</a></h4>
         <span>${{$product->price}}</span>
      </div>
   </div>
</div>
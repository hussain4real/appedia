@extends('layouts.front')


@section('content')


<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="cart-heading">Cart</h1>
            <div class="table-content table-responsive">
               <table>
                  <thead>
                     <tr>
                        <th>remove</th>
                        <th>images</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($cartItems as $item)
                     <tr>
                        <td class="product-remove"><a href="{{ route('cart.destroy', $item->id) }}"><i
                                 class="pe-7s-close"></i></a></td>
                        <td class="product-thumbnail">
                           <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                        </td>
                        <td class="product-name"><a href="#">{{ $item->name }} </a></td>
                        <td class="product-price-cart"><span
                              class="amount">${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</span></td>
                        <td class="product-quantity">
                           <form action="{{route('cart.update', $item->id)}}" method="get">
                              <input name="quantity" type="number" value="{{ $item->quantity }}">

                              <input class="button btn-primary" type="submit" value="save">

                           </form>
                        </td>
                        <td class="product-subtotal">${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="coupon-all">
                     <div class="coupon">
                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code"
                           type="text">
                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                     </div>

                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5 ml-auto">
                  <div class="cart-page-total">
                     <h2>Cart totals</h2>
                     <ul>
                        <li>Subtotal<span>{{\Cart::session(auth()->id())->getSubTotal()}}</span></li>
                        <li>Total<span>{{\Cart::session(auth()->id())->getTotal()}}</span></li>
                     </ul>
                     <a href="{{route('cart.checkout')}}">Proceed to checkout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- shopping-cart-area end -->


{{-- <table class="table">
   <thead>
      <tr>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Action</th>
      </tr>
   </thead>
   <tbody>
      @foreach ($cartItems as $item)
      <tr>
         <td scope="row">{{ $item->name }}</td>
<td>${{ Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</td>
<td>
   <form action="{{route('cart.update', $item->id)}}">
      <input name="quantity" type="number" value="{{ $item->quantity }}">
      <input type="submit" value="save">
   </form>

</td>
<td><a href="{{route('cart.destroy', $item->id)}}">Delete</a></td>
</tr>

@endforeach
</tbody>
</table>

<h3>Total Price: ${{\Cart::session(auth()->id())->getTotal()}}</h3>

<a class="btn btn-primary" href="{{route('cart.checkout')}}" role="button">Proceed to checkout</a> --}}


@endsection


<div class="cart-section container">
   <div>
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


      @if (Cart::getContent()->count() > 0)


      <h2>{{Cart::getContent()->count()}} item(s) in Shopping Cart</h2>

      <div class="cart-table">
         @foreach ($cartItems as $item)

         <div class="cart-table-row">
            <div class="cart-table-row-left">
               <a href="{{route('product.show', $item->id)}}"><img src="/img/macbook-pro.png" alt="item"
                     class="cart-table-img"></a>
               <div class="cart-item-details">
                  <div class="cart-table-item"><a href="#">{{$item->name}}</a></div>
                  <div class="cart-table-description">{{$item->detail}}</div>
               </div>
            </div>
            <div class="cart-table-row-right">
               <div class="cart-table-actions">
                  <a href="{{ route('cart.destroy', $item->id) }}">Remove</a> <br>
                  <a href="{{route('cart.store', $item->id)}}"">Save for Later</a>
                   </div>
                   <div>
                       <form action=" {{route('cart.update', $item->id)}}" method="get"></form>
                     {{-- <select class=" quantity" data-id="{{ $item->id}}">
                     <option {{$item->quantity == 1 ? 'selected' : ''}}>1</option>
                     <option {{$item->quantity == 2 ? 'selected' : ''}}>2</option>
                     <option {{$item->quantity == 3 ? 'selected' : ''}}>3</option>
                     <option {{$item->quantity == 4 ? 'selected' : ''}}>4</option>
                     <option {{$item->quantity == 5 ? 'selected' : ''}}>5</option>
                     </select> --}}
                     <input name="quantity" type="number" value="{{ $item->quantity }}">

                     <input class="button btn-primary" type="submit" value="save">
               </div>
               <div>${{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}</div>
            </div>
         </div> <!-- end cart-table-row -->
         @endforeach



      </div> <!-- end cart-table -->

      <a href="#" class="have-code">Have a Code?</a>

      <div class="have-code-container">
         <form action="#">
            <input type="text">
            <button type="submit" class="button button-plain">Apply</button>
         </form>
      </div> <!-- end have-code-container -->

      <div class="cart-totals">
         <div class="cart-totals-left">
            Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like
            figuring out :).
         </div>

         <div class="cart-totals-right">
            <div>
               Subtotal <br>
               {{-- Tax <br> --}}
               <span class="cart-totals-total">Total: </span>
            </div>
            <div class="cart-totals-subtotal">
               ${{$subTotal}} <br>
               {{-- {{$condition->getValue()}} <br> --}}
               <span class="cart-totals-total">${{$total}}</span>
            </div>
         </div>
      </div> <!-- end cart-totals -->

      <div class="cart-buttons">
         <a href="{{route('products.index')}}" class="button">Continue Shopping</a>
         <a href="{{route('cart.checkout')}}" class="button-primary">Proceed to Checkout</a>
      </div>
      @else
      <h3>No items in Cart</h3>
      <div class="spacer"></div>
      <a href="{{route('products.index')}}" class="button">Continue Shopping</a>
      <div class="spacer"></div>

      @endif




   </div>

</div>
<!-- end cart-section -->
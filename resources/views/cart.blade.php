@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')

@endsection

@section('content')
<!-- all css here -->
{{-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="assets/css/icofont.css">
<link rel="stylesheet" href="assets/css/meanmenu.min.css">
<link rel="stylesheet" href="assets/css/bundle.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


<div class="breadcrumbs">
    <div class="container">
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shopping Cart</span>
    </div>
</div> <!-- end breadcrumbs -->

<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">

        <div>
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
</div>
@endif
@if (session()->has('error_message'))
<div class="alert alert-danger">
    {{ session()->get('error_message') }}
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

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

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
                        <td class="product-remove"><a href="{{ route('cart.destroy', $item->id) }}"><i class="pe-7s-close"></i></a></td> --}}


                        {{-- <td class="product-thumbnail">
                                        <a href="#"><img src="{{ productImage($item->model->cover_img)}}" alt=""></a>
                        </td>
                        <td class="product-name"><a href="#">{{ $item->model->name }} </a></td>
                        <td class="product-price-cart"><span class="amount">${{Cart::get($item->model->id)->getPriceSum()}}</span>
                        </td>
                        <td class="product-quantity">
                            <form action="{{route('cart.update', $item->id)}}" method="get">


                                <input name="quantity" type="number" value="{{ $item->quantity }}">

                                <input class="button btn-primary" type="submit" value="save">


                            </form>
                        </td>
                        <td class="product-subtotal">
                            ${{Cart::get($item->model->id)->getPriceSum()}}
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
                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
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
                        <li>Subtotal<span>{{$subTotal}}</span></li>
                        <li>Total<span>{{$total}}</span></li>
                    </ul>
                    @if ($item->quantity <= $item->model->quantity)
                        <a href="{{route('cart.checkout')}}">Proceed to checkout</a>
                        @else
                        <div class="alert alert-danger">quantity has exceeded the available stock <br>
                            available item in stock is {{$item->model->quantity}}
                        </div>
                        @endif


                </div>
            </div>
        </div>
    </div>
</div>
@else
<h3>No items in Cart</h3>
<div class="spacer"></div>
<a href="{{route('products.index')}}" class="button">Continue Shopping</a>
<div class="spacer"></div>

@endif
</div>
</div>
</div> --}}


<!-- shopping-cart-area end -->

{{-- new cart section --}}



<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- jQuery -->
<script src="uikit/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="uikit/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="uikit/css/bootstrap.css?v=1.0" rel="stylesheet" type="text/css" />

<!-- Font awesome 5 -->
<link href="uikit/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

<!-- plugin: fancybox  -->
<script src="uikit/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
<link href="uikit/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

<!-- plugin: owl carousel  -->
<link href="uikit/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="uikit/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="uikit/plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- custom style -->
<link href="uikit/css/ui.css?v=1.0" rel="stylesheet" type="text/css" />
<link href="uikit/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="uikit/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
    /// some script

    // jquery ready start
    $(document).ready(function() {
        // jQuery code

    });
    // jquery end
</script>

<div class="container">


    @if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
</div>
@endif
@if (session()->has('error_message'))
<div class="alert alert-danger">
    {{ session()->get('error_message') }}
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


<div class="container">
    <div class="row">
        <aside class="col-lg-9">
            <div class="card">

                <div class="table-responsive">

                    <table class="table table-borderless table-hover table-shopping-cart">
                        <thead class="text-muted">
                            <tr class=" text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="130">Quantity</th>
                                <th scope="col" class="price">Price</th>
                                <th scope="col" class="text-right  d-md-block"> </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img src="{{ productImage($item->model->cover_img)}}" class="img-sm"></div>
                                        <div class="spacer"></div>
                                        <figcaption class="info">
                                            <a href="#" class="title text-dark">{{ $item->model->name }}</a>
                                            <p class="small text-muted">Version: CUH-ZCT2E <br> Brand: Sony</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <form action="{{route('cart.update', $item->id)}}" method="GET">
                                        <div class="input-group input-spinner mr-10">
                                            <div class="input-group-prepend">

                                                <input class="btn btn-dark" type="submit" onclick="decrementValue()" id="button-minus" value="-">


                                                <input name="quantity" type="text" id="number" class="form-control text-bold" value="{{ $item->quantity }}">
                                                <div class="input-group-append">
                                                    <input class="btn btn-dark" type="submit" onclick="incrementValue()" id="button-plus" value="+">


                                                </div>
                                            </div>
                                        </div> <!-- input-spinner.// -->

                                    </form>
                                </td>
                                <td>
                                    <div class="price-wrap">
                                        <var class="price">${{Cart::get($item->model->id)->getPriceSum()}}</var>

                                    </div> <!-- price-wrap .// -->
                                    <small class="text-muted "> ${{$item->model->price}}
                                        each</small>
                                </td>
                                <td class="text-right   d-md-block">
                                    @if(auth()->check())
                                    <form action="{{route('wishlist.store')}}" method="post">
                                        {{csrf_field()}}
                                        <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                                        <input name="product_id" type="text" value="{{$item->model->id}}" hidden />
                                        <button data-original-title="Save to Wishlist" title="" type="submit" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></button>
                                    </form>
                                    @else
                                    <a data-original-title="Save to Wishlist" title="" href="/login" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a>

                                    @endif
                                    <a href="{{ route('cart.destroy', $item->id) }}" class="btn btn-dark btn-round text-white"><i class="fas fa-trash"></i>
                                        Remove</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- table-responsive.// -->

                {{-- <div class="card-body border-top">
                    <p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
                </div> <!-- card-body.// --> --}}

            </div> <!-- card.// -->

        </aside> <!-- col.// -->
        <aside class="col-lg-3">

            <div class="card mb-3">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Have coupon?</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="" placeholder="Coupon code">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary">Apply</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div> <!-- card-body.// -->
            </div> <!-- card.// -->

            <div class="card">
                <div class="card-body">
                    <dl class="dlist-align">
                        <dt>Total price:</dt>
                        <dd class="text-right">${{$subTotal}}</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Discount:</dt>
                        <dd class="text-right text-danger">$0.00</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Total:</dt>
                        <dd class="text-right text-dark b"><strong>${{$total}}</strong></dd>
                    </dl>
                    <hr>
                    <p class="text-center mb-3">
                        <img src="bootstrap-ecommerce-html/images/misc/payments.png" height="26">
                    </p>
                    @if ($item->quantity <= $item->model->quantity)
                        <a href="{{route('cart.checkout')}}" class="btn btn-light btn-block " id="purchase">
                            Make Purchase
                        </a>
                        @else
                        <div class="alert alert-danger">quantity has exceeded the available stock <br>
                            available item in stock is {{$item->model->quantity}}
                        </div>
                        @endif

                        <a href="{{route('products.index')}}" class="btn btn-dark btn-block text-white">Continue
                            Shopping</a>
                </div> <!-- card-body.// -->
            </div> <!-- card.// -->

        </aside> <!-- col.// -->
    </div> <!-- row.// -->
    @else
    <h3>No items in Cart</h3>
    <div class="spacer"></div>
    <a href="{{route('products.index')}}" class="button">Continue Shopping</a>
    <div class="spacer"></div>

    @endif
</div>



{{-- end new cart section --}}

@include('partials.might-like')


@endsection

@section('extra-js')

<script>
    function incrementValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;

        console.log(value);
    }

    function decrementValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 10 : value;
        value--;
        document.getElementById('number').value = value;

        console.log(value);
    }

    //     var i = 1;

    // function incrementValue() {
    //     if (i < 10) {
    //         i++;
    //     } else if (i = 10) {
    //         i = 1;
    //     }
    //     document.getElementById("number").value = i;
    // }

    // function decrementValue() {
    //     if (i > 1) {
    //         i--;
    //     } else if (i = 1) {
    //         i = 10;
    //     }
    //     document.getElementById("number").value = i;
    // }
</script>

@endsection

<!-- all js here -->
{{-- <script src="assets/js/vendor/jquery-1.12.0.min.js"></script> --}}
{{-- <script src="assets/js/popper.js"></script> --}}
{{-- <script src="assets/js/bootstrap.min.js"></script> --}}
{{-- <script src="assets/js/jquery.magnific-popup.min.js"></script> --}}
{{-- <script src="assets/js/isotope.pkgd.min.js"></script> --}}
{{-- <script src="assets/js/imagesloaded.pkgd.min.js"></script> --}}
{{-- <script src="assets/js/jquery.counterup.min.js"></script> --}}
{{-- <script src="assets/js/waypoints.min.js"></script> --}}
{{-- <script src="assets/js/ajax-mail.js"></script> --}}
{{-- <script src="assets/js/owl.carousel.min.js"></script> --}}
{{-- <script src="assets/js/plugins.js"></script> --}}
{{-- <script src="assets/js/main.js"></script> --}}
{{--
@section('extra-js')

<script src="{{asset('js/app.js')}}"></script>

(function(){
const classname = document.querySelectorAll('.quantity')
Array.from(classname).forEach(function(element) {
element.addEventListener('change', function() {
const id = element.getAttribute('action')
const productQuantity = element.getAttribute('data-productQuantity')
axios.patch(`/cart/${id}`, {
quantity: this.value,
productQuantity: productQuantity
})
.then(function (response) {
// console.log(response);
window.location.href = '{{ route('cart.index') }}'
})
.catch(function (error) {
// console.log(error);
window.location.href = '{{ route('cart.index') }}'
});
})
})
})();
</script>



@endsection --}}
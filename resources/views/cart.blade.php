@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')

@endsection

@section('content')
<!-- all css here -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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
                                    <td class="product-remove"><a href="{{ route('cart.destroy', $item->id) }}"><i
                                                class="pe-7s-close"></i></a></td>

                                    {{-- <form action="{{route('cart.store', $item->id)}}" method="post">
                                    @csrf
                                    <button type="submit">Save for later</button>
                                    </form> --}}
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="{{ productImage($item->model->cover_img)}}" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{ $item->model->name }} </a></td>
                                    <td class="product-price-cart"><span
                                            class="amount">${{Cart::get($item->model->id)->getPriceSum()}}</span>
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
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                        placeholder="Coupon code" type="text">
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
</div>


<!-- shopping-cart-area end -->

@include('partials.might-like')


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
<script>
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
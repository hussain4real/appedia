@extends('layout')

@section('title', $product->name)

@section('extra-css')

@endsection

@section('content')




<div class="breadcrumbs">
    <div class="container">
        <a href="/">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span><a href="{{route('products.index')}}">Shop</a></span>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{$product->name}}</span>
    </div>
</div> <!-- end breadcrumbs -->

<div class="container">

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
</div>


<!-- all css here -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/magnific-popup.css">
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="/assets/css/themify-icons.css">
<link rel="stylesheet" href="/assets/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="/assets/css/icofont.css">
<link rel="stylesheet" href="/assets/css/meanmenu.min.css">
<link rel="stylesheet" href="/assets/css/jquery-ui.css">
<link rel="stylesheet" href="/assets/css/bundle.css">
<link rel="stylesheet" href="/assets/css/style.css">
<link rel="stylesheet" href="/assets/css/responsive.css">
<script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
<div class="product-section container">
    <div>
        <div class="product-section-image">
            <img src="{{ productImage($product->cover_img)}}" alt="product" class="active" id="currentImage">
            {{-- <img src="{{ asset('img/macbook-pro.png') }}" alt="product"> --}}
            {{-- asset(Voyager::image($product->cover_img)) --}}
        </div>
        <div class="product-section-images">

            <div class="product-section-thumbnail selected">
                <img src="{{ productImage($product->cover_img)}}" alt="product">
            </div>

            @if ($product->images)
            @foreach (json_decode($product->images, true) as $image)
            <div class="product-section-thumbnail">
                <img src="{{ productImage($image)}}" alt="product">
            </div>
            @endforeach
            @endif

        </div>
    </div>
    <div class="product-section-information">
        <h1 class="product-section-title">{{$product->name}}</h1>
        <div class="product-section-subtitle">{{$product->detail}}</div>
        <div>{!! $stockLevel !!}</div>
        <div class="product-section-price">${{$product->price}}</div>

        <p>
            {!!$product->description!!}
        </p>

        <div class="select-option-part">
            <label>Size*</label>
            <select class="select">
                <option value="">- Please Select -</option>
                <option value="">small</option>
                <option value="">medium</option>
                <option value="">large</option>
            </select>
        </div>
        <div class="select-option-part">
            <label>Color*</label>
            <select class="select">
                <option value="">- Please Select -</option>
                <option value="">orange</option>
                <option value="">pink</option>
                <option value="">yellow</option>
            </select>
        </div>

        <p>&nbsp;</p>

        @if ($product->quantity > 0)

        <div id="buy_wishlist">
            <a href="{{route('cart.add', $product->id)}}" id="add_to_cart" class="button">Add to Cart</a>
            @endif
            @if(auth()->check())
            <form action="{{route('wishlist.store')}}" id="contact_form" method="post">
                {{csrf_field()}}
                <input name="user_id" type="text" value="{{Auth::user()->id}}" hidden />
                <input name="product_id" type="text" value="{{$product->id}}" hidden />
                <button id="wishing" class="button" type="submit"><i class="fas fa-heart"></i></button>
            </form>
            @else
            <a href="/login" id="wish" class="button" type="submit"><i class="fas fa-heart"></i></a>

            @endif
        </div>





        {{-- <form action="{{route('cart.store')}}" method="GET">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="hidden" name="name" value="{{$product->name}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <button type="submit" class="button buttot-plain">Add to Cart</button>
        </form> --}}
    </div>
</div> <!-- end product-section -->


<div id="app">
    @if(auth()->check())


    @include('partials.review_form')
    @else
    <a href="/login" class="button">Write a review</a>

    @endif
</div>
<script src="/js/bootstrap.js"></script>
<script src="/js/app.js"></script>






{{-- new design --}}





@include('partials.might-like')


@endsection


@section('extra-js')
<script>
    (function(){
        const currentImage = document.querySelector('#currentImage');
        const images = document.querySelectorAll('.product-section-thumbnail');

        images.forEach((element) => element.addEventListener('click', thumbnailClick));

        function thumbnailClick(e){


            currentImage.classList.remove('active');

            currentImage.addEventListener('transitionend', () =>{
                currentImage.src = this.querySelector('img').src;
                currentImage.classList.add('active');
            })

            images.forEach((element) => element.classList.remove('selected'));
            this.classList.add('selected');
        }
        })();
</script>
@endsection
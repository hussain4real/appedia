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
        <span>Macbook Pro</span>
    </div>
</div> <!-- end breadcrumbs -->

<div class="product-section container">
    <div class="product-section-image">
        <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
    </div>
    <div class="product-section-information">
        <h1 class="product-section-title">{{$product->name}}</h1>
        <div class="product-section-subtitle">{{$product->detail}}</div>
        <div class="product-section-price">${{$product->price}}</div>

        <p>
            {{$product->description}}
        </p>


        <p>&nbsp;</p>

        <a href="{{route('cart.add', $product->id)}}" class="button">Add to Cart</a>
        {{-- <form action="{{route('cart.store')}}" method="GET">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
        <input type="hidden" name="name" value="{{$product->name}}">
        <input type="hidden" name="price" value="{{$product->price}}">
        <button type="submit" class="button buttot-plain">Add to Cart</button>
        </form> --}}
    </div>
</div> <!-- end product-section -->

@include('partials.might-like')


@endsection
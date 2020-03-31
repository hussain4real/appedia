@extends('layouts.front')


@section('content')
<header>
   <div class="header-area">
      <div class="header-left-sidebar">
         <div class="logo">
            <a href="{{route('home')}}"><img src="assets/img/logo/logo.png" alt="Appedia"></a>
         </div>


      </div>
   </div>
</header>

<div class="container">

   <h2> {{ $categoryName ?? null }} Products </h2>

   <div class="custom-row-2">
      @foreach ($products as $product)

      @include('product._single_product')
      @endforeach

   </div>


</div>

@endsection
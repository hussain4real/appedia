@extends('layout')

@section('title', 'My Orders')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<div class="breadcrumbs">
   <div class="container">
      <a href="/">Home</a>
      <i class="fa fa-chevron-right breadcrumb-separator"></i>
      <span>My Orders</span>
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

<div class="products-section my-orders container">
   <div class="sidebar">

      <ul>
         <li><a href="{{ route('users.edit') }}">My Profile</a></li>
         <li class="active"><a href="{{ route('orders.index') }}">My Orders</a></li>
      </ul>
   </div> <!-- end sidebar -->
   <div class="my-profile">
      <div class="products-header">
         <h1 class="stylish-heading">My Orders</h1>
      </div>

      <div>
         @foreach ($orders as $order)
         <div class="order-container">
            <div class="order-header">
               <div class="order-header-items">
                  <div>
                     <div class="uppercase font-bold">Order Placed</div>
                     <div>{{$order->created_at }}</div>
                  </div>
                  <div>
                     <div class="uppercase font-bold">Order ID</div>
                     <div>{{ $order->id }}</div>
                  </div>
                  <div>
                     <div class="uppercase font-bold">Total</div>
                     <div>$ {{ $order->grand_total }}</div>
                  </div>
               </div>
               @if ($order->shop)

               <div>sold by {{$order->shop->name}}</div>
               @endif
               <div>
                  <div class="order-header-items">
                     <div><a href="{{ route('orders.show', $order->id) }}">Order Details</a></div>
                     <div>|</div>
                     <div><a href="#">Invoice</a></div>
                  </div>
               </div>
            </div>
            <div class="order-products">
               @foreach ($order->items as $product)
               <div class="order-product-item">
                  <div><img src="{{ productImage($product->cover_img) }}" alt="Product Image"></div>
                  <div>
                     <div>
                        <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                     </div>
                     <div>$ {{ $product->price }}</div>
                     <div>Quantity: {{ $product->pivot->quantity }}</div>
                  </div>
               </div>
               @endforeach

            </div>

         </div> <!-- end order-container -->
         @endforeach
      </div>






      {{-- <table class="table table-striped">
      <thead>
         <tr>
            <td><b>Month</b></td>
            <td><b>Total Orders</b></td>
            <td><b>Total Income</b></td>
            <td><b>Average Order</b></td>

         </tr>
      </thead>
      <tbody>
         @foreach ($months as $month)



         <tr>
            <td>
               {{ $month->months }}

      </td>
      <td>
         {{$month->total}}
      </td>
      <td>
         QAR {{ $month->sums }}

      </td>
      <td>
         QAR {{$month->average}}
      </td>

      </tr>

      @endforeach
      </tbody>
      </table> --}}


      <div class="spacer"></div>

   </div>
</div>

@endsection
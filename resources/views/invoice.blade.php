<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>Order Invoice</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
   <div class="panel panel-bordered ">
      <h2>Invoice</h2>
   </div>
   <h4 class="text-center mb-10">Buyers details</h4>
   <table class="table table-striped">
      {{-- <thead>
         <tr>
            <td><b>Order ID</b></td>
            <td><b>Order Placed</b></td>
            <td><b>Name</b></td>
            <td><b>Address</b></td>
            <td><b>City</b></td>
            <td><b>Total</b></td>
            <td><b>Status</b></td>

         </tr>
      </thead>
      <tbody>
         <tr>
            <td>
               {{ $order->id }}
      </td>
      <td>
         {{ $order->created_at }}
      </td>
      <td>
         {{ $order->user->name }}
      </td>
      <td>
         {{ $order->shipping_address }}
      </td>
      <td>
         {{ $order->shipping_city }}
      </td>
      <td>
         $ {{ $order->grand_total }}
      </td>
      <td>
         {{ $order->status }}
      </td>
      </tr> --}}

      <tbody>
         <tr>
            <td>Name</td>
            <td>{{ $order->user->name }}</td>
         </tr>
         <tr>
            <td>Address</td>
            <td>{{ $order->shipping_address }}</td>
         </tr>
         <tr>
            <td>City</td>
            <td>{{ $order->shipping_city }}</td>
         </tr>
         {{-- <tr>
               <td>Subtotal</td>
               <td> ${{Cart::get($order->id)->getPriceSum()}}</td>
         </tr>
         <tr>
            <td>Tax</td>
            <td>{{ presentPrice($order->billing_tax) }}</td>
         </tr> --}}
         <tr>
            <td>Total</td>
            <td>$ {{ $order->grand_total }}</td>
         </tr>
         <tr>
            <td>Live Status</td>
            <td>{{ $order->tracking }}</td>
         </tr>
         <tr>
            <td>Status</td>
            <td>{{ $order->status }}</td>
         </tr>
         @if ($order->shop)
         <tr>
            <td>Sold By (shop)</td>
            <td>{{$order->shop->name}}</td>
         </tr>
         @endif
      </tbody>



   </table>
   <div>
      <h4 class="text-center">Item details</h4>
      <table class="table table-striped">>
         <thead>
            <tr>

               <td><b>Name</b></td>
               <td><b>Detail</b></td>
               <td><b>Price</b></td>
               <td><b>Quantity</b></td>


            </tr>
         </thead>
         <tbody>
            @foreach ($order->items as $product)
            <tr>
               <td>{{ $product->name }}</td>
               <td> {{$product->detail}}</td>
               <td>$ {{ $product->price }}</td>
               <td>{{ $product->pivot->quantity }}</td>

            </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</body>

</html>
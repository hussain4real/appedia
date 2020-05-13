@extends('voyager::master')

@section('title', 'My Stats')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

{{-- <div class="breadcrumbs">
   <div class="container">
      <a href="/">Home</a>
      <i class="fa fa-chevron-right breadcrumb-separator"></i>
      <span>My Stats</span>
   </div>
</div> <!-- end breadcrumbs --> --}}

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
   <h2 class="text-center text-xl mb-10 text-teal-500">Overall Monthly Financial Report</h2>
   <div>
      <a href="{{action('OrderController@pdfReport')}}" class="float-right btn btn-primary"><i
            class="voyager-download"></i><span class="p-4">Download</span>
      </a>
   </div>


   <table class="table table-striped my-10">
      <thead>
         <tr>
            <td><b>Month</b></td>
            <td><b>Total Orders</b></td>
            <td><b>Total Income</b></td>
            <td><b>Average Order</b></td>
            {{-- <td><b>Shop</b></td> --}}

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
            {{-- @if ($month->shop_id)

            <td>{{$month->shop_id}}</td>

            @endif --}}

         </tr>

         @endforeach
      </tbody>
   </table>


   <div class="spacer"></div>

</div>
<h2 class="text-center text-xl mb-10 text-teal-500">Monthly Financial Report for Shops</h2>
<div>

   <table class="table table-striped my-10">
      <thead>
         <tr>
            <td><b>Month</b></td>
            <td><b>Shop</b></td>
            <td><b>Total Orders</b></td>
            <td><b>Total Income</b></td>
            <td><b>Average Order</b></td>
            {{-- <td><b>Shop</b></td> --}}

         </tr>
      </thead>
      <tbody>
         @foreach ($shops as $shop)



         <tr>
            <td>
               {{ $shop->months }}

            </td>
            <td>
               {{ $shop->name }}

            </td>
            <td>
               {{$shop->total}}
            </td>
            <td>
               QAR {{ $shop->sums }}

            </td>
            <td>
               QAR {{$shop->average}}
            </td>
            {{-- @if ($month->shop_id)

            <td>{{$month->shop_id}}</td>

            @endif --}}

         </tr>

         @endforeach
      </tbody>
   </table>

   <div class="spacer"></div>

   <div class="flex mt-10">
      <div class="w-1/2">
         {!! $iChart->container() !!}
      </div>

      <div class="w-1/2 px-4">
         {!! $mChart->container() !!}
      </div>


   </div>
   <div class="mt-10">
      {!! $dChart->container() !!}
   </div>


   {!! $iChart->script() !!}
   {!! $mChart->script() !!}
   {!! $dChart->script() !!}
</div>
</div>

@endsection
</div>
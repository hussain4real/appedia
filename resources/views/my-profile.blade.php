@extends('layout')

@section('title', 'My Profile')


@section('content')

<div class="breadcrumbs">
   <div class="container">
      <a href="/">Home</a>
      <i class="fa fa-chevron-right breadcrumb-separator"></i>
      <span>My Profile</span>
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

<div class="products-section container">
   <div class="sidebar">

      <ul>
         <li class="active"><a href="{{ route('users.edit') }}">My Profile</a></li>
         <li><a href="{{ route('orders.index') }}">My Orders</a></li>
         <li><a href="{{route('wishlist.store')}}">My Wishlist</a></li>
      </ul>
   </div> <!-- end sidebar -->
   <div class="my-profile">
      <div class="products-header">
         <h1 class="stylish-heading">My Profile</h1>
      </div>

      <div>
         <form action="{{ route('users.update') }}" method="POST">
            @method('patch')
            @csrf
            <div class="form-control">
               <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="Name"
                  required>
            </div>
            <div class="form-control">
               <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email"
                  required>
            </div>
            <div class="form-control">
               <input id="password" type="password" name="password" placeholder="Password">
               <div>Leave password blank to keep current password</div>
            </div>
            <div class="form-control">
               <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <div>
               <button type="submit" class="my-profile-button">Update Profile</button>
            </div>
         </form>
      </div>

      <div class="spacer"></div>
   </div>
</div>

@endsection
@extends('layout')

@section('title', 'Checkout')

@section('extra-css')

@endsection

@section('content')

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

    <h1 class="checkout-heading stylish-heading">Checkout</h1>
    <div class="checkout-section">
        <div>
            <form action="{{route('orders.store')}}" method="POST">
                @csrf
                <h2>Billing Details</h2>

                <div class="form-group">
                    <label for="email">Email Address</label>

                    @if (auth()->user())
                    <input type="email" class="form-control" id="email" name="email" value="{{auth()->user()->email}}"
                        readonly>
                    @else
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                    @endif

                </div>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="shipping_fullname" value="" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="shipping_address" value="" required>
                </div>

                <div class="half-form">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="shipping_city" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="province">State</label>
                        <input type="text" class="form-control" id="province" name="shipping_state" value="">
                    </div>
                </div> <!-- end half-form -->

                <div class="half-form">
                    <div class="form-group">
                        <label for="postalcode">Zip Code</label>
                        <input type="text" class="form-control" id="postalcode" name="shipping_zipcode" value="">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="shipping_phone" value="" required>
                    </div>
                </div> <!-- end half-form -->

                <div class="spacer"></div>

                {{-- <h2>Payment Details</h2>

                <div class="form-group">
                    <label for="name_on_card">Name on Card</label>
                    <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="">
                </div>

                <div class="form-group">
                    <label for="cc-number">Credit Card Number</label>
                    <input type="text" class="form-control" id="cc-number" name="cc-number" value="">
                </div>

                <div class="half-form">
                    <div class="form-group">
                        <label for="expiry">Expiry</label>
                        <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/DD">
                    </div>
                    <div class="form-group">
                        <label for="cvc">CVC Code</label>
                        <input type="text" class="form-control" id="cvc" name="cvc" value="">
                    </div>
                </div> <!-- end half-form --> --}}

                <div class="spacer"></div>

                <button type="submit" class="button-primary full-width"
                    onclick="this.form.submit(); this.disabled=true; this.innerText='Submitting....';">Complete
                    Order</button>


            </form>
        </div>



        <div class="checkout-table-container">
            <h2>Your Order</h2>

            <div class="checkout-table">

                @foreach ($cartItems as $item)

                <div class="checkout-table-row">
                    <div class="checkout-table-row-left">
                        <img src="{{ productImage($item->model->cover_img)}}" alt="item" class="checkout-table-img">
                        <div class="checkout-item-details text-center">
                            <div class="checkout-table-item">{{$item->model->name}}</div>
                            <div class="checkout-table-description">{{$item->model->detail}}</div>
                            <div class="checkout-table-price">
                                ${{Cart::get($item->model->id)->getPriceSum()}}</div>
                        </div>
                    </div> <!-- end checkout-table -->

                    <div class="checkout-table-row-right">
                        <div class="checkout-table-quantity">{{Cart::getTotalQuantity()}}</div>
                    </div>
                </div> <!-- end checkout-table-row -->
                @endforeach


            </div> <!-- end checkout-table -->

            <div class="checkout-totals">
                <div class="checkout-totals-left">
                    Subtotal <br>
                    {{-- Discount (10OFF - 10%) <br>
                    Tax <br> --}}
                    <span class="checkout-totals-total">Total</span>

                </div>

                <div class="checkout-totals-right">
                    ${{$subTotal}} <br>
                    {{-- -$750.00 <br>
                    $975.00 <br> --}}
                    <span class="checkout-totals-total">${{$total}}</span>

                </div>
            </div> <!-- end checkout-totals -->

        </div>

    </div> <!-- end checkout-section -->
</div>

@endsection

@section('extra-js')
<script>

</script>

@endsection
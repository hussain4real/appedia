<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = auth()->user()->orders()->with('items')->get(); // fix n + 1 issues

        return view('my-orders')->with('orders', $orders);
    }

    public function downloadPDF($id) {
        $order = Order::find($id);
        $products = $order->products;
        $pdf = PDF::loadView('invoice', compact('order', 'products'));

        return $pdf->download('invoice.pdf');
}

    // public function invoice()
    // {
    //     $pdf = PDF::loadView('pdf', compact('invoice'));
    //     return $pdf->download('invoice.pdf');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::all();
        //check if products has already been purchased 'as in fastest finger first'
        if ($this->productsAreNoLongerAvailable()) {
            return back()->withErrors('Sorry! One of the items in your cart is no longer available.');
        }

        $emailValidation = auth()->user() ? 'required|email' : 'required|email|unique:users';

        $request->validate([
            'email'=> $emailValidation,
            'shipping_fullname' => 'required',
            'shipping_city' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',

        ]);

        $order = new Order();

        $order->order_number = \uniqid('OrderNumber-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_zipcode = $request->input('shipping_zipcode');

        if (!$request->has('billing_fullname')) {

            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');
        }else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');
        }




        $order->grand_total = \Cart::getTotal();
        $order->item_count = \Cart::getContent()->count();

        $order->user_id = auth()->id();
        $order->shop_id = auth()->id();


        $order->save();

        //save order item
        $cartItems = \Cart::getContent();

        foreach ($cartItems as  $item) {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' =>$item->quantity]);
        }

        // decrease the quantity of all the products ordered
        $this->decreaseQuantities();

       //empty the cart after completion of order
       \Cart::clear();

       //send email to customer

       //take user to thank you page or just return a string

       return redirect()->route('confirmation.index')->with('success_message','Order has been placed successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if (auth()->id() !== $order->user_id) {
            return back()->withErrors('You do not have access to this!');
        }

        $products = $order->products;

        return view('my-order')->with([
            'order' => $order,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    protected function decreaseQuantities()
    {
        foreach (\Cart::getcontent() as $item ) {
            $product = Product::find($item->model->id);

            $product->update(['quantity' => $product->quantity - $item->quantity]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (\Cart::getcontent() as $item ) {
            $product = Product::find($item->model->id);

            if ($product->quantity < $item->quantity) {
                return true;
            }

        }

        return false;
    }
}


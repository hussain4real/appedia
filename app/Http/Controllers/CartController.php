<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product){


        // add the product to cart
        $userId = auth()->user()->id;
        \Cart::session($userId)->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return redirect()->route('cart.index');


    }

    // cart display page logic
    public function index(){

        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('cart.index', compact('cartItems'));
    }

    //item romaval from cart logic
    public function destroy($itemId){

        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }

    //update item in the cart logic
    public function update($itemId){

        \Cart::session(auth()->id())->update($itemId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);

        return back();
    }


    // checkout from cart logic
    public function checkout()
    {
        return \view('cart.checkout');
    }
}

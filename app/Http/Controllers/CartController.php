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

        // $condition = new \Darryldecode\Cart\CartCondition(array(
        //     'name' => 'VAT 12.5%',
        //     'type' => 'tax',
        //     'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
        //     'value' => '-12.5%',
        //     'attributes' => array( // attributes field is optional
        //         'description' => 'Value added tax',
        //         'more_data' => 'more data here'
        //     )
        //     ));

        $userId = auth()->user()->id;

        $subTotal = \Cart::session($userId)->getSubTotal();
        // $condition = \Cart::session($userId)->getCondition('VAT 1.5%');
        // $conditionCalculatedValue = $condition->getCalculatedValue($subTotal);


        $total = \Cart::session($userId)->getTotal(); // for a speicifc user's cart


        $cartItems = \Cart::session(auth()->id())->getContent();

        $mightAlsoLike = Product::mightAlsoLike()->get();

        return view('cart')->with([
            'mightAlsoLike' => $mightAlsoLike,
            'cartItems' => $cartItems,
            // 'condition' => $condition,
            'subTotal' => $subTotal,
            // 'conditionCalculatedValue' => $conditionCalculatedValue,
            'total' => $total,


        ])->with('success_message', 'Item was added to your cart');
    }

    //item romaval from cart logic
    public function destroy($itemId){

        \Cart::session(auth()->id())->remove($itemId);

        return back()->with('success_message', 'Item has been removed');
    }

    // public function store($itemId){


    // //     // add the product to cart
    //     $item = \Cart::session(auth()->id())->get($itemId);

    //     \Cart::session(auth()->id())->remove($itemId);

    //     $userId = auth()->user()->id;
    //     $saveForLater = \Cart::session($userId)->add(array(
    //         'id' => $item->id,
    //         'name' => $item->name,
    //         'price' => $item->price,
    //         'quantity' => 1,
    //         'attributes' => array(),

    //     ))->associate('App\Product');
    //     return redirect()->route('cart.index')->with([
    //         'success_message' => 'Item has been saved for later',
    //         'saveForLater' => $saveForLater,
    //     ]);




    // }

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

        $userId = auth()->user()->id;

        $subTotal = \Cart::session($userId)->getSubTotal();
        $total = \Cart::session($userId)->getTotal();
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('checkout')->with([
            'cartItems' => $cartItems,
            'subTotal' => $subTotal,
            'total' => $total,

            ]);
    }
}

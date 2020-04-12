<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function add(Product $product){


        // add the product to cart
        // $userId = auth()->user()->id;
        // session($userId)->
        if (\session()) {
            \Cart::add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $product
            ));
        } else {
            \Cart::add(array(
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $product
            ));
        }


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

        // $userId = auth()->user()->id;

        if (session()) {
            $subTotal = \Cart::getSubTotal();
            // session($userId)->

            // $condition = \Cart::session($userId)->getCondition('VAT 1.5%');
            // $conditionCalculatedValue = $condition->getCalculatedValue($subTotal);


            $total = \Cart::getTotal(); // for a speicifc user's cart
            // session($userId)->


            $cartItems = \Cart::getContent();
            // session(auth()->id())->
        } else {
            $subTotal = \Cart::getSubTotal();
            // session($userId)->

            // $condition = \Cart::session($userId)->getCondition('VAT 1.5%');
            // $conditionCalculatedValue = $condition->getCalculatedValue($subTotal);


            $total = \Cart::getTotal(); // for a speicifc user's cart
            // session($userId)->


            $cartItems = \Cart::getContent();
            // session(auth()->id())->
        }




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
        // session(auth()->id())->

        return back()->with('success_message', 'Item has been removed');
    }

    public function store($itemId){


    //     // add the product to cart
        $item = \Cart::session(auth()->id())->get($itemId);

        \Cart::session(auth()->id())->remove($itemId);


        $saveForLater = \Cart::session(auth()->id())->add(array(
            'id' => $item->id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => array(),

        ))->associate('App\Product');
        return redirect()->route('cart.index')->with([
            'success_message' => 'Item has been saved for later',
            'saveForLater' => $saveForLater,
        ]);




    }

    //update item in the cart logic
    public function update(Request $request, $itemId ){


        $validator = Validator::make($request->all(),[
            'quantity' => 'required|numeric|min:1',

        ]);

        if ($validator->fails()) {
            session()->flash('error', collect(['Quantity cannot be less than 1']));
            return back()->with('error_message', 'Quantity cannot be less than 1 and greater than the number in stock');
        }

        // $stockLevel = getStockLevel($product->quantity);
        // if ($request->quanttity > $stockLevel) {
        //     session()->flash('error', collect(['We currently do not have enough item in stock.']));
        //     return response()->json(['success' => false], 400);
        // }
        // session(auth()->id())->
        \Cart::session(auth()->id())->update($itemId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity'),
                'attributes' => array(),
                'associatedModel' => 'Product'
            )
        ]);

        return back();
    }


    // checkout from cart logic
    public function checkout()
    {

        // $userId = auth()->user()->id;
        if (session()) {
            $subTotal = \Cart::getSubTotal();
            $total = \Cart::getTotal();
            $cartItems = \Cart::getContent();
        } else {
            $subTotal = \Cart::getSubTotal();
            $total = \Cart::getTotal();
            $cartItems = \Cart::getContent();
        }



        return view('checkout')->with([
            'cartItems' => $cartItems,
            'subTotal' => $subTotal,
            'total' => $total,

            ]);
    }
}

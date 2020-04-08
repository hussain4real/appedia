<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');  dissabled for unregistered users to view the homepage
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::where('featured', true)->with('shop')->inRandomOrder()->take(8)->get();

        $productCat = Product::inRandomOrder()->take(4)->get();



        // $categories = Category::whereNull('parent_id')->get();
        $categories = Category::all();

        // $children = Category::where('parend_id', $category->id)->get();


        return view('landing-page')->with([
            'products' => $products,
            'categories' => $categories,
            'productCat' => $productCat,


            ]);
    }
}

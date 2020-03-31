<?php

namespace App\Http\Controllers;

use App\Product;
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
        $products = Product::inRandomOrder()->take(7)->get();

        $categories = Category::whereNull('parent_id')->get();

        // $children = Category::where('parend_id', $category->id)->get();


        return view('main',['products' => $products, 'categories' => $categories]);
    }
}

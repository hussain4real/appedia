<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Models\Category as voyagerCat;


/**
 * @group Product management
 *
 * APIs for managing products
 */
class ProductController extends Controller
{
    /**
     * Display a listing of products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoryId = request('category_id');
        // $categoryName = null;

        // if($categoryId) {
        //     $category = Category::find($categoryId);
        //     $categoryName = ucfirst($category->name);

        //     $products = $category->allProducts();
        // }else{
        //     $products = Product::take(10)->get();
        // }

        // return view('product.index', compact('products', 'categoryName'));


        $pagination = 8;
        $categories = Category::all();
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query)
            {
                $query->where('slug', request()->category);
            });

            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {

        $products = Product::where('featured', true)->inRandomOrder();


        $categoryName = 'Featured';
        }

        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        }else {
            $products = $products->paginate($pagination);
        }


        // return view('products')->with([
        //     'products' => $products,
        //     'categories' => $categories,
        //     'categoryName' => $categoryName,
        //     ]);

        return response()->json([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
        ],201);

    }

    public function search(Request $request)
    {

        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        $products = Product::where('name','LIKE',"%$query%")
                            ->orWhere('detail', 'LIKE',"%$query%")
                            ->orWhere('description', 'LIKE',"%$query%")
                            ->paginate(9);

        // $products = Product::search($query, null)->paginate(9);
        // return view('product.catalog', compact('products'));
        $categories = Category::all();

        // return view('search-results')->with([
        //     'products' => $products,
        //     'categories' => $categories,
        //     ]);

        return response()->json([
            'products' => $products,
            'categories' => $categories,

        ],201);
    }




    /**
     * Display the specified product.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        $mightAlsoLike = Product::where('id', '!=', $id)->mightAlsoLike()->get();

        $stockLevel = getStockLevel($product->quantity);

        // $avgReview = getStarRating()->get();




        // return view('product')->with([
        //     'product' => $product,
        //     'stockLevel' => $stockLevel,
        //     'mightAlsoLike' => $mightAlsoLike,

        //     ]);

        return response()->json([
            'product' => $product,
            'stockLevel' => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike,


        ],201);
    }







    // public function detail($id = null)
    // {
    //     $productDetails = Product::where('id', $id)->first();


    //     return view('product.detail', compact('productDetails'));
    // }
}

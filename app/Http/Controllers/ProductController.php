<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category as voyagerCat;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
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


        return view('products')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            ]);

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

        return view('search-results')->with([
            'products' => $products,
            'categories' => $categories,
            ]);
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->firstOrFail();

        $mightAlsoLike = Product::where('id', '!=', $id)->mightAlsoLike()->get();

        $stockLevel = getStockLevel($product->quantity);




        return view('product')->with([
            'product' => $product,
            'stockLevel' => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    // public function detail($id = null)
    // {
    //     $productDetails = Product::where('id', $id)->first();


    //     return view('product.detail', compact('productDetails'));
    // }
}

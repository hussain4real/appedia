<?php

namespace App;

use App\Product;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as ModelsCategory;

class Category extends Model
{

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'product_categories');
    }

    public function allProducts()
    {
        $allProducts = collect([]);

        $mainCategoryProducts = $this->products;

        $allProducts = $allProducts->concat($mainCategoryProducts);

        if ($this->children->isNotEmpty()) {

            foreach ($this->children as $child) {
                $allProducts = $allProducts->concat($child->products);
            }
        }

        return $allProducts;
    }
}

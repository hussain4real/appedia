<?php

namespace App;

use App\Shop;
use App\Category;
use NumberFormatter;
use App\ProductCategory;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use Searchable;

    protected $fillable = ['quantity'];


//     public function shouldBeSearchable()
// {
//     return $this->quantity > 0;
// }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'product_categories');
    }



    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function presentPrice()
    {
        $fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
        return $fmt->formatCurrency($this->price, "EUR");
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
}

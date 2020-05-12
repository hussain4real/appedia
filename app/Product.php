<?php

namespace App;

use App\Shop;

use App\Category;
use NumberFormatter;
use App\ProductReview;
use App\ProductCategory;
use App\ProductsAttribute;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{


    protected $fillable = ['quantity'];


//     public function shouldBeSearchable()
// {
//     return $this->quantity > 0;
// }

    public function productsAttribute()
    {
        return $this->hasMany(ProductsAttribute::class);
    }


    public function categories()
    {
        return $this->hasMany(Category::class);
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

    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function getStarRating()
    {
        $count = $this->reviews()->count();
        if(empty($count)){
            return 0;
        }
        $starCountSum=$this->reviews()->sum('rating');
        $average=$starCountSum/ $count;

       return $average;

    }

    public function wishlist(){
        return $this->hasMany(Wishlist::class);
     }
}

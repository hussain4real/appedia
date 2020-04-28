<?php

namespace App;

use App\Shop;
use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{



    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items','order_id','product_id')->withPivot('quantity','price');
    }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //recent edit
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}

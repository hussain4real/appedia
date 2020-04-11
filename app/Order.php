<?php

namespace App;

use App\Shop;
use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id', 'shipping_fullname', 'shipping_address', 'shipping_city', 'shipping_state', 'shipping_zipcode', 'shipping_phone', 'notes', 'error',
    ];

    public function items()
    {
        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id')->withPivot('quantity','price');
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

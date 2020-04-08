<?php

namespace App;

use App\Shop;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = ['order_id', 'product_id', 'shop_id', 'price', 'quantity'];


    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
}

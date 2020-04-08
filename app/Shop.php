<?php

namespace App;

use App\User;
use App\Order;
use App\Product;
use App\OrderItem;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable=['name','description'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'shop_id');
    }


}

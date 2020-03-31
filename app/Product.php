<?php

namespace App;

use App\Shop;
use NumberFormatter;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function presentPrice()
    {
        $fmt = new NumberFormatter( 'de_DE', NumberFormatter::CURRENCY );
        return $fmt->formatCurrency($this->price, "EUR");
    }
}

<?php

namespace App;


use App\Product;
use Illuminate\Database\Eloquent\Model;


class ProductsAttribute extends Model
{



   public function products()
   {
       return $this->belongsTo(Product::class);
   }

}
<?php

namespace App;

use App\Shop;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Mall extends Model
{
    protected $fillable=['name','description'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function shops()
    {
        return $this->hasMany(Shop::class, 'mall_id');
    }
}

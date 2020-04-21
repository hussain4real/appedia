<?php

namespace App;

use App\Shop;
use App\Order;
use App\ProductReview;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\PasswordResetNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mall()
    {
        return $this->hasOne(Mall::class, 'user_id');
    }


    public function shop()
    {
        return $this->hasOne(Shop::class, 'user_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function review()
    {
        return $this->hasOne(ProductReview::class);
    }

    public function wishlist(){
        return $this->hasMany(Wishlist::class);
     }



public function sendPasswordResetNotification($token)
{
    $this->notify(new PasswordResetNotification($token));
}
}

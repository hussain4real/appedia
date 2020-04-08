<?php

namespace App\Policies;

use App\Order;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('seller');
    }


    public function read(User $user, Order $order)
    {
        if (empty($order->shop)) {
            return false;
        }

        return $user->id == $order->shop->user_id;
    }

    /**
     * Determine whether the user can update the Order.
     *
     * @param  \App\User  $user
     * @param  \App\Order  $order
     * @return mixed
     */
    public function edit(User $user, Order $order)
    {
        if(empty($order->shop)) {
            return false;
        }

        return $user->id == $order->shop->user_id;
    }


    /**
     * Determine whether the user can create Products.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function add(User $user)
    {
        return $user->hasRole('seller');
    }

    /**
     * Determine whether the user can delete the Order.
     *
     * @param  \App\User  $user
     * @param  \App\Order  $order
     * @return mixed
     */
    public function delete(User $user, Order $order)
    {
        if (empty($order->shop)) {
            return false;
        }

        return $user->id == $order->shop->user_id;
    }


}
<?php

namespace App;
use Session, Cart;
use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    public static function SaveOrder()
    {
        $valid = false;
        $order = new self();
        $order->user_id = Session::get("user_id");
        $order->content = Cart::getContent()->toJson();
        $order->subtotal = Cart::getTotal();
        $order->save();
        if ($order->id) {
            Cart::clear();
            $valid = true;
        }
        return $valid;
    }
}

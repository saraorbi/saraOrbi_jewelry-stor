<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
use Cart;
use Session;


class shopController extends Controller
{
   public static function AddToCart(Request $request)
   {
      if (is_numeric($request->product_id) && $request->product_id != 0) {
         if ($product = Product::find($request->product_id)->toArray()) {
            Cart::add($product['id'], $product['name'], $product['price'], 1, array());
            echo true;
         } else {
         }
      } else {
      }
   }
   public static function DeleteProduct(Request $request){
       Cart::remove($request->product_id);
   }
   public static function UpdateCart(Request $request){
      if (is_numeric($request->product_id) && $request->product_id != 0) {
         if(Cart::get($request->product_id)){
             Cart::update($request->product_id,array('quantity'=>-1,));
             echo true;
         }    
      }
   }

   public static function ViewCart()
   {
      // self::$data['title'] .= " | cart";
      self::$data['cartContent'] = json_decode(Cart::getContent()->toJson());
      return view('cart', self::$data);
   }

   public static function SaveOrder()
   {
      if (Session::get('user_id')) {
         if (Cart::getTotalQuantity() > 0) {
            if (Order::SaveOrder()) {
               Session::flash('sm', "your order has been saved");
               return redirect("shop/ViewCart");
            }
         } else {
            return redirect("/")->withErrors("the cart must have min 1 product");
         }
      } else {
         return redirect("user/login")->withErrors("you must login brfore saving an order");
      }
   }
}

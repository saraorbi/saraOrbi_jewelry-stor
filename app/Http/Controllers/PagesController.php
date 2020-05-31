<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Product;
use Cart;

class PagesController extends Controller
{
    public function home()
    {
        // self::$data['categories'] = categorie::all()->toArray();
        self::$data['title'] .= ' Home';


        return view('home', self::$data);
    }

    public static function Showhome2()
    {
        self::$data['categories'] = categorie::all()->toArray();
        return view('home2', self::$data);
    }

    public function ShowCat($cat_name)
    {
        $cat = Categorie::where('cat_name', "$cat_name")->first()->toArray();
        $products = Product::where('cat_id', "{$cat['id']}")->paginate(3);
        self::$data['objProducts'] = $products;
        self::$data['products'] = $products->toArray();
        // echo "<pre>";
        // print_r(self::$data['products']);

        self::$data['title'] .= " | $cat_name";
        return view('category', self::$data);
    }

    public function ShowProduct($product_id)
    {
        $product = Product::find($product_id)->toArray();
        $cat = Categorie::where('id', "{$product['cat_id']}")->first()->toArray();
        self::$data['category'] = $cat;
        self::$data['product'] = $product;
        self::$data['title'] .= " | $product[name]";
        return view('product', self::$data);
    }

    public static function ShowDashbord()
    {
        return view("cms.dashbord", self::$data);
    }
}

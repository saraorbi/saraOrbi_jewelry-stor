<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;

class Product extends Model
{
    // static public function ShowCategories()
    // {
    //     $products = self::all()->toArray();
    //     return $products;
    // }
    // public static $fileName;
    public static function saveNewProduct($request)
    {
        $valid = false;
        $product = new self();
        $product->cat_id = str_replace(" ", "_", $request->cat_name);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = Categorie::uploadFile($request);
        $product->price = $request->price;
        $product->save();
        if ($product->id) {
            $valid = true;
        }
        return $valid;
    }
    public static function UpdateProduct($request, $id)
    {
        $valid = false;
        $product = self::find($id);
        $product->cat_id = str_replace(" ", "_", $request->cat_name);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = Categorie::uploadFile($request);
        $product->price = $request->price;
        $product->save();
        if ($product->id) {
            $valid = true;
        }
        return $valid;
    }
}

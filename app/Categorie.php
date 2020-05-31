<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorie extends Model
{

    // public static function ShowCategories()
    // {
    //     $categories = self::all()->toArray();
    //     return $categories;
    // }

    public static $fileName;
    public static function saveNewCategory($request)
    {
        $valid = false;
        $category = new self();
        $category->cat_name = str_replace(" ", "_", $request->cat_name);
        $category->description = $request->description;
        $category->image = self::uploadFile($request);
        $category->save();
        if ($category->id) {
            $valid = true;
            return redirect("cms/categories");
        }
    }

    public static function uploadFile($request)
    {
        $file = $request->file('image');
        self::$fileName = "default.jpg";
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            self::$fileName = time() . $file->getClientOriginalName();
            $file->move(public_path() . "/img", self::$fileName);
            
        }
            return self::$fileName; 
    }

    public static function UpdateCategory($request, $id)
    {
      $valid = false;
      $category = self::find($id);
      //select * from Category where cat_name=$category['cat_name']
      $checkCatName = DB::select('select * from categories where cat_name = ? ' . 'and id != ?', [$request->cat_name, $id]);
      //dd($checkCatName);
      if (count($checkCatName) == 0) {
        $category->cat_name = str_replace(" ", "_", $request->cat_name);
        $category->description = $request->description;
        if ($request->hasFile('image')) {
          $category->image = self::uploadFile($request);
        }
        $category->save();
        if ($category->id) {
          return true;
        }
      }
      return redirect("cms/categories")->withErrors("there is category like this");
    }
}

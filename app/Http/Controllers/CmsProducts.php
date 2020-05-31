<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests\AddProduct;
use App\Http\Requests\EditProduct;

class CmsProducts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$data['title'] .= " products";
        $products = DB::select('select p.*,c.cat_name from categories as c join products as p on c.id=p.cat_id');
        self::$data['products'] = $products;
        return view("cms.products", self::$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$data['title'] .= "Add New Product";
        self::$data['categories'] = Categorie::all()->toArray();
        return view("cms.addproduct", self::$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Product::saveNewProduct($request)) {
            Session::flash('sm', "new product added");
            return redirect('cms/products');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (self::$data['product'] = Product::find($id)->toArray()) {
            self::$data['title'] .= "Delete Form";
            self::$data['deleteType'] = "Product";
            return view("cms.deleteProduct", self::$data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($product = DB::select('select p.*,c.cat_name from categories as c join products as p on c.id= p.cat_id where p.id=?', [$id])) {
            self::$data['product'] = $product[0];
            self::$data['categories'] = Categorie::all();
            self::$data['title'] .= "Edit Form";

            return view("cms.EditProduct", self::$data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProduct $request, $id)
    {
        if (Product::UpdateProduct($request, $id)) {
            Session::flash('sm', "Product updated");
            return redirect('cms/products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if ($id && is_numeric($id)) {
            Product::destroy($id);
            Session::flash('sm', "product has been deleted");
            return redirect("cms/products");
        }
    }
}

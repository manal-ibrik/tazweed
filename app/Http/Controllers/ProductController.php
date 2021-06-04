<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        if(request()->category){
            $Product = Product::with('category', 'category.Product')->whereHas('category', function($query){
                $query->where('name', request()->category);
            })->get();
        }else{
            $Product = Product::all();

        }
        $data=array(
            'categories' => $categories,
            'Product' =>$Product,
        );
        return view('products', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $categories = Categories::all();
        $product_category=DB::table('categories_products')->join('categories' , 'categories.id' ,'=', 'categories_id')->join('products', 'products.id', '=','products_id')->where('products.id', $id)->get();
        // $product_category = Categories::with('Product', 'Product.category')->whereHas('Product')->find($id);
        $data = array(
            'categories' => $categories,
            'product' => $product,
            'product_category' => $product_category,
        );
        return view('products-details' , $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

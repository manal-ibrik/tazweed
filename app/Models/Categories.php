<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Categories extends Model
{
    use HasFactory;
    function Product(){
        return $this->belongsToMany('App\Models\Product');
    }
    function related_Product(){
       return DB::table('categories_products')->join('categories' , 'categories.id' ,'=', 'categories_id')->join('products', 'products.id', '=','products_id')->where('categories.name', $this->name)->get();
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('frontend.product');
    }
    public function product_detail($slug){
        $list = Product::where('slug',$slug)
        ->select("id","name","image","price","pricesale","description")->first();
        return view('frontend.product_detail',compact('list'));
    }
   
}
   
<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $list = Product::where('status','!=',0)
        ->select('id','image','name','slug','price','pricesale','status')
        ->get();
        return view('backend.product.index', compact('list'));   

    }
    public function trash()
    {
        
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function status(string $id)
    {
        //
    }
    public function delete(string $id)
    {
        //
    }

    public function restore(string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

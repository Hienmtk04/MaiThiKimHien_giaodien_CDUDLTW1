<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        $list = Post::where('status','!=',0)
        ->get();
        return view('frontend.news',compact('list'));
    }
}

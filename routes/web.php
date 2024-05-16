<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('san-pham',[ProductController::class,'product'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail'])->name('site.product.detail');
Route::get('lien-he',[ContactController::class,'contact'])->name('site.contact');



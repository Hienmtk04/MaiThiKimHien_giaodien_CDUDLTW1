<?php

// frontend

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\ProductController;
use Illuminate\Support\Facades\Route;

// backend
use App\Http\Controllers\backend\ProductController as BackendProductController;
use App\Http\Controllers\backend\CategoryController as BackendCategoryController;
use App\Http\Controllers\backend\BannerController as BackendBannerController;
use App\Http\Controllers\backend\BrandController as BackendBrandController;
use App\Http\Controllers\backend\ContactController as BackendContactController;
use App\Http\Controllers\backend\MenuController as BackendMenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;


Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/san-pham', [ProductController::class, 'product'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}', [ProductController::class, 'product_detail'])->name('site.product.detail');
Route::get('lien-he', [ContactController::class, 'contact'])->name('site.contact');
Route::get('tin-tuc', [NewsController::class, 'news'])->name('site.news');

route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    // 1.Banner
    route::prefix('banner')->group(function(){
        Route::get('/', [BackendBannerController::class, "index"])->name('admin.banner.index' );
        Route::get('trash', [BackendBannerController::class, "trash"])->name('admin.banner.trash' );
        Route::get('show/{id}', [BackendBannerController::class, "show"])->name('admin.banner.show' );
        Route::post('create', [BackendBannerController::class, "create"])->name('admin.banner.create' );
        Route::get('store', [BackendBannerController::class, "store"])->name('admin.banner.store' );
        Route::put('edit/{id}', [BackendBannerController::class, "edit"])->name('admin.banner.edit' );
        Route::get('update/{id}', [BackendBannerController::class, "update"])->name('admin.banner.update' );
        Route::get('status/{id}', [BackendBannerController::class, "status"])->name('admin.banner.status' );
        Route::delete('delete/{id}', [BackendBannerController::class, "delete"])->name('admin.banner.delete' );
        Route::get('restore/{id}', [BackendBannerController::class, "restore"])->name('admin.banner.restore' );
        Route::delete('destroy/{id}', [BackendBannerController::class, "destroy"])->name('admin.banner.destroy' );
    });

    // 2.Contact
    route::prefix('contact')->group(function(){
        Route::get('/', [BackendContactController::class, "index"])->name('admin.contact.index' );
        Route::get('trash', [BackendContactController::class, "trash"])->name('admin.contact.trash' );
        Route::get('show/{id}', [BackendContactController::class, "show"])->name('admin.contact.show' );
        Route::get('create', [BackendContactController::class, "create"])->name('admin.contact.create' );
        Route::get('store', [BackendContactController::class, "store"])->name('admin.contact.store' );
        Route::get('edit/{id}', [BackendContactController::class, "edit"])->name('admin.contact.edit' );
        Route::get('update/{id}', [BackendContactController::class, "update"])->name('admin.contact.update' );
        Route::get('status/{id}', [BackendContactController::class, "status"])->name('admin.contact.status' );
        Route::get('delete/{id}', [BackendContactController::class, "delete"])->name('admin.contact.delete' );
        Route::get('restore/{id}', [BackendContactController::class, "restore"])->name('admin.contact.restore' );
        Route::get('destroy/{id}', [BackendContactController::class, "destroy"])->name('admin.contact.destroy' );
    });

    // 3.Menu
    route::prefix('menu')->group(function(){
        Route::get('/', [BackendMenuController::class, "index"])->name('admin.menu.index' );
        Route::get('trash', [BackendMenuController::class, "trash"])->name('admin.menu.trash' );
        Route::get('show/{id}', [BackendMenuController::class, "show"])->name('admin.menu.show' );
        Route::get('create', [BackendMenuController::class, "create"])->name('admin.menu.create' );
        Route::get('store', [BackendMenuController::class, "store"])->name('admin.menu.store' );
        Route::get('edit/{id}', [BackendMenuController::class, "edit"])->name('admin.menu.edit' );
        Route::get('update/{id}', [BackendMenuController::class, "update"])->name('admin.menu.update' );
        Route::get('status/{id}', [BackendMenuController::class, "status"])->name('admin.menu.status' );
        Route::get('delete/{id}', [BackendMenuController::class, "delete"])->name('admin.menu.delete' );
        Route::get('restore/{id}', [BackendMenuController::class, "restore"])->name('admin.menu.restore' );
        Route::get('destroy/{id}', [BackendMenuController::class, "destroy"])->name('admin.menu.destroy' );
    });

    // 4. Order
    route::prefix('order')->group(function(){
        Route::get('/', [OrderController::class, "index"])->name('admin.order.index' );
        Route::get('trash', [OrderController::class, "trash"])->name('admin.order.trash' );
        Route::get('show/{id}', [OrderController::class, "show"])->name('admin.order.show' );
        Route::get('create', [OrderController::class, "create"])->name('admin.order.create' );
        Route::get('store', [OrderController::class, "store"])->name('admin.order.store' );
        Route::get('edit/{id}', [OrderController::class, "edit"])->name('admin.order.edit' );
        Route::get('update/{id}', [OrderController::class, "update"])->name('admin.order.update' );
        Route::get('status/{id}', [OrderController::class, "status"])->name('admin.order.status' );
        Route::get('delete/{id}', [OrderController::class, "delete"])->name('admin.order.delete' );
        Route::get('restore/{id}', [OrderController::class, "restore"])->name('admin.order.restore' );
        Route::get('destroy/{id}', [OrderController::class, "destroy"])->name('admin.order.destroy' );
    });

    // 5.Post
    route::prefix('post')->group(function(){
        Route::get('/', [PostController::class, "index"])->name('admin.post.index' );
        Route::get('trash', [PostController::class, "trash"])->name('admin.post.trash' );
        Route::get('show/{id}', [PostController::class, "show"])->name('admin.post.show' );
        Route::get('create', [PostController::class, "create"])->name('admin.post.create' );
        Route::get('store', [PostController::class, "store"])->name('admin.post.store' );
        Route::get('edit/{id}', [PostController::class, "edit"])->name('admin.post.edit' );
        Route::get('update/{id}', [PostController::class, "update"])->name('admin.post.update' );
        Route::get('status/{id}', [PostController::class, "status"])->name('admin.post.status' );
        Route::get('delete/{id}', [PostController::class, "delete"])->name('admin.post.delete' );
        Route::get('restore/{id}', [PostController::class, "restore"])->name('admin.post.restore' );
        Route::get('destroy/{id}', [PostController::class, "destroy"])->name('admin.post.destroy' );
    });

    // 6. Topic
    route::prefix('topic')->group(function(){
        Route::get('/', [TopicController::class, "index"])->name('admin.topic.index' );
        Route::get('trash', [TopicController::class, "trash"])->name('admin.topic.trash' );
        Route::get('show/{id}', [TopicController::class, "show"])->name('admin.topic.show' );
        Route::get('create', [TopicController::class, "create"])->name('admin.topic.create' );
        Route::get('store', [TopicController::class, "store"])->name('admin.topic.store' );
        Route::get('edit/{id}', [TopicController::class, "edit"])->name('admin.topic.edit' );
        Route::get('update/{id}', [TopicController::class, "update"])->name('admin.topic.update' );
        Route::get('status/{id}', [TopicController::class, "status"])->name('admin.topic.status' );
        Route::get('delete/{id}', [TopicController::class, "delete"])->name('admin.topic.delete' );
        Route::get('restore/{id}', [TopicController::class, "restore"])->name('admin.topic.restore' );
        Route::get('destroy/{id}', [TopicController::class, "destroy"])->name('admin.topic.destroy' );
    });

    // 7.User
    route::prefix('user')->group(function(){
        Route::get('/', [UserController::class, "index"])->name('admin.user.index' );
        Route::get('trash', [UserController::class, "trash"])->name('admin.user.trash' );
        Route::get('show/{id}', [UserController::class, "show"])->name('admin.user.show' );
        Route::get('create', [UserController::class, "create"])->name('admin.user.create' );
        Route::get('store', [UserController::class, "store"])->name('admin.user.store' );
        Route::get('edit/{id}', [UserController::class, "edit"])->name('admin.user.edit' );
        Route::get('update/{id}', [UserController::class, "update"])->name('admin.user.update' );
        Route::get('status/{id}', [UserController::class, "status"])->name('admin.user.status' );
        Route::get('delete/{id}', [UserController::class, "delete"])->name('admin.user.delete' );
        Route::get('restore/{id}', [UserController::class, "restore"])->name('admin.user.restore' );
        Route::get('destroy/{id}', [UserController::class, "destroy"])->name('admin.user.destroy' );
    });

    // 8.Product
    route::prefix('product')->group(function(){
        Route::get('/', [BackendProductController::class, "index"])->name('admin.product.index' );
        Route::get('trash', [BackendProductController::class, "trash"])->name('admin.product.trash' );
        Route::get('show/{id}', [BackendProductController::class, "show"])->name('admin.product.show' );
        Route::get('create', [BackendProductController::class, "create"])->name('admin.product.create' );
        Route::get('store', [BackendProductController::class, "store"])->name('admin.product.store' );
        Route::get('edit/{id}', [BackendProductController::class, "edit"])->name('admin.product.edit' );
        Route::get('update/{id}', [BackendProductController::class, "update"])->name('admin.product.update' );
        Route::get('status/{id}', [BackendProductController::class, "status"])->name('admin.product.status' );
        Route::get('delete/{id}', [BackendProductController::class, "delete"])->name('admin.product.delete' );
        Route::get('restore/{id}', [BackendProductController::class, "restore"])->name('admin.product.restore' );
        Route::get('destroy/{id}', [BackendProductController::class, "destroy"])->name('admin.product.destroy' );
    });

    // 9.category
    route::prefix('category')->group(function(){
        Route::get('/', [BackendCategoryController::class, "index"])->name('admin.category.index' );
        Route::get('trash', [BackendCategoryController::class, "trash"])->name('admin.category.trash' );
        Route::get('show/{id}', [BackendCategoryController::class, "show"])->name('admin.category.show' );
        Route::get('create', [BackendCategoryController::class, "create"])->name('admin.category.create' );
        Route::get('store', [BackendCategoryController::class, "store"])->name('admin.category.store' );
        Route::get('edit/{id}', [BackendCategoryController::class, "edit"])->name('admin.category.edit' );
        Route::get('update/{id}', [BackendCategoryController::class, "update"])->name('admin.category.update' );
        Route::get('status/{id}', [BackendCategoryController::class, "status"])->name('admin.category.status' );
        Route::get('delete/{id}', [BackendCategoryController::class, "delete"])->name('admin.category.delete' );
        Route::get('restore/{id}', [BackendCategoryController::class, "restore"])->name('admin.category.restore' );
        Route::get('destroy/{id}', [BackendCategoryController::class, "destroy"])->name('admin.category.destroy' );
    }); 


    // 10.brand
    route::prefix('brand')->group(function(){
        Route::get('/', [BackendBrandController::class, "index"])->name('admin.brand.index' );
        Route::get('trash', [BackendBrandController::class, "trash"])->name('admin.brand.trash' );
        Route::get('show/{id}', [BackendBrandController::class, "show"])->name('admin.brand.show' );
        Route::get('create', [BackendBrandController::class, "create"])->name('admin.brand.create' );
        Route::get('store', [BackendBrandController::class, "store"])->name('admin.brand.store' );
        Route::get('edit/{id}', [BackendBrandController::class, "edit"])->name('admin.brand.edit' );
        Route::get('update/{id}', [BackendBrandController::class, "update"])->name('admin.brand.update' );
        Route::get('status/{id}', [BackendBrandController::class, "status"])->name('admin.brand.status' );
        Route::get('delete/{id}', [BackendBrandController::class, "delete"])->name('admin.brand.delete' );
        Route::get('restore/{id}', [BackendBrandController::class, "restore"])->name('admin.brand.restore' );
        Route::get('destroy/{id}', [BackendBrandController::class, "destroy"])->name('admin.brand.destroy' );
    });
     
});

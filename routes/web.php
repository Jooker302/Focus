<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/test', function () {
    return view('layouts\admin');
});

Auth::routes();


Route::get('view-category',[CategoryController::class,'index']);
Route::get('add-category',[CategoryController::class,'add']);
Route::post('store-category',[CategoryController::class,'store']);
Route::get('edit-category',[CategoryController::class,'edit']);
Route::post('update-category',[CategoryController::class,'update']);
Route::get('delete-category/{id}',[CategoryController::class,'delete']);


Route::get('view-sub-category',[SubCategoryController::class,'index']);
Route::get('add-sub-category',[SubCategoryController::class,'add']);
Route::post('store-sub-category',[SubCategoryController::class,'store']);
Route::get('edit-sub-category',[SubCategoryController::class,'edit']);
Route::post('update-sub-category',[SubCategoryController::class,'update']);
Route::get('delete-sub-category/{id}',[SubCategoryController::class,'delete']);


Route::get('view-products', [ProductController::class, 'index']);
Route::get('add-product', [ProductController::class, 'add']);
Route::post('store-product', [ProductController::class, 'store']);
Route::get('edit-product', [ProductController::class, 'edit']);
Route::post('update-product', [ProductController::class, 'update']);
Route::get('delete-product/{id}', [ProductController::class, 'delete']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

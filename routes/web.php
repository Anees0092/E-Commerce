<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/cart', 'website.shop.cart', ['name' => 'cart']);
Route::view('/about', 'website.about.about', ['name' => 'about']);
Route::view('/contact', 'website.contact.contact', ['name' => 'contact']);


Route::get('/shop',[WelcomeController::class,'index']);
Route::get('/singleproduct/{id}',[WelcomeController::class,'singleProduct']);


// admin
Route::view('/admin', 'admin.admin', ['name' => 'admin']);
Route::resource('products', ProductController::class);
Route::resource('category', CategoryController::class);
Route::get('/deleteproduct/{id}',[ProductController::class,'destroy']);
Route::get('/editproduct/{id}',[ProductController::class,'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



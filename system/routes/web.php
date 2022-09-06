<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

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
    return view('frontview.index');
});

Route::get('/index', [HomeController::class, 'showindex']);
Route::get('/produk', [HomeController::class, 'showproduk']);
Route::get('/produk-detail', [HomeController::class, 'showprodukdetail']);
Route::get('/contact', [HomeController::class, 'showcontact']);
Route::get('/checkout', [HomeController::class, 'showcheckout']);
Route::get('/shoping-cart', [HomeController::class, 'showshopingcart']);

Route::get('/supplier', [HomeController::class, 'showsupplier']);
Route::get('/colegan', [HomeController::class, 'showcolegan']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/promo', [HomeController::class, 'showpromo']);
Route::get('/user', [HomeController::class, 'showuser']);
Route::get('/login2', [AuthController::class, 'showlogin2']);

Route::get('/produk', [HomeController::class, 'showproduk']);
Route::get('/kategori', [HomeController::class, 'showkategori']);


Route::get('/login', [AuthController::class, 'showlogin']);
Route::get('/register', [AuthController::class, 'showregister']);
Route::get('/login2', [AuthController::class, 'showlogin2']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/template', function () {
    return view('Template.base');
});

Route::resource('/produk', ProdukController::class);


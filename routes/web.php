<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StoresController;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


   $stores3 =  Store::take(3)->get();

    return view('welcome',compact('stores3'));
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::resource('category', CategoryController::class);
    Route::resource('stores', StoresController::class);
    Route::resource('setting', SettingController::class);
    Route::get('/store-by-category/{slug}',[GeneralController::class,'index'])->name('store-by-category');
    Route::get('/categories',[GeneralController::class,'categories'])->name('categories');

});

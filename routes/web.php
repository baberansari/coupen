<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StoresController;
use App\Models\Category;
use App\Models\Faq;
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
   $stores3 =  Store::all();
    return view('welcome',compact('stores3'));
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::resource('category', CategoryController::class);
    Route::resource('stores', StoresController::class);
    Route::resource('setting', SettingController::class);
    // Offer
    Route::get('offer-index', [OfferController::class,'index'])->name('offer.index');
    Route::get('offer-create', [OfferController::class,'create'])->name('offer.create');
    Route::post('offer-store', [OfferController::class,'store'])->name('offer.store');
    Route::get('offer-destroy/{id}', [OfferController::class,'destroy'])->name('offer.destroy');
    // FAQ
    Route::get('faq-index',[FaqController::class,'index'])->name('faqs.index');
    Route::get('faq-create',[FaqController::class,'create'])->name('faqs.create');
    Route::post('faq-store',[FaqController::class,'store'])->name('faqs.store');
    Route::get('faq-destroy/{id}', [OfferController::class,'destroy'])->name('faqs.destroy');
});
  // This Route For  Store List By Categories
  Route::get('/store-by-category/{slug}',[GeneralController::class,'index'])->name('store-by-category');

  // This is Categories
  Route::get('/categories',[GeneralController::class,'categories'])->name('categories');

  //  This Route For Store Web Site Listing
  Route::get('/store/{slug}',[GeneralController::class,'store'])->name('store');
  Route::get('/get-code',[GeneralController::class,'getCode'])->name('getCode');

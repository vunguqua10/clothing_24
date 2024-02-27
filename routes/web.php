<?php

use App\Http\Controllers\IndexController;
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
    return view('shop-index.shop-index');
});

// Route::get('/index',[IndexController::class, 'index']);

 Route::get('/index-light-footer',[IndexController::class, 'indexLightFooter']);

 Route::get('/index-header-fix',[IndexController::class, 'indexHeaderFix']);

 Route::get('/about-us',[IndexController::class, 'about']);

 Route::get('/account',[IndexController::class, 'account']);

 Route::get('/checkout',[IndexController::class, 'checkout']);

 Route::get('/contacts',[IndexController::class, 'contacts']);

 Route::get('/faq',[IndexController::class, 'faq']);

 Route::get('/compare',[IndexController::class, 'goodsCompare']);

 Route::get('/item',[IndexController::class, 'item']);

 Route::get('/policy',[IndexController::class, 'privacyPolicy']);

 Route::get('/product-list',[IndexController::class, 'productList']);

 Route::get('/search-result',[IndexController::class, 'searchResult']);

 Route::get('/shopping-cart',[IndexController::class, 'shoppingCart']);

 Route::get('/shopping-cart-null',[IndexController::class, 'shoppingCartNull']);

 Route::get('/standart-forms',[IndexController::class, 'standartForms']);

 Route::get('/terms-conditions-page',[IndexController::class, 'termsConditionsPage']);

 Route::get('/wishlist ',[IndexController::class, 'wishlist']);















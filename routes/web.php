<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('shop.index');
});
/* shop dog*/
Route::get('/necklacedog',function () {
    return view('access.shopdog.necklacedog');
});
Route::get('/clothesdog',function () {
    return view('access.shopdog.clothesdog');
});
Route::get('/bowdog',function () {
    return view('access.shopdog.bowdog');
});
Route::get('/chaindog',function () {
    return view('access.shopdog.chaindog');
});
Route::get('/brushdog',function () {
    return view('access.shopdog.brushdog');
});
/* shopcat */
Route::get('/necklacecat',function () {
    return view('access.shopcat.necklacecat');
});
Route::get('/clothescat',function () {
    return view('access.shopcat.clothescat');
});
Route::get('/bowandhatcat',function () {
    return view('access.shopcat.bowandhatcat');
});
Route::get('/shaketheneck',function () {
    return view('access.shopcat.shaketheneck');
});

Route::get('/productdetails',function (){
    return view('access.productdetails') ;
});
Route::get('/accessories',function (){
    return view('access.accessori');
});

Route::get('/404',function (){
    return view('error.404');
});

Route::get('/contact', function () {
    return view('shop.contact');
});

Route::get('/about', function () {
    return view('shop.about');
});

Route::get('/user/register',function (){
   return view('partials.login-register');
});

Route::get('/cart',function (){
    return view('shop.cart');
});

Route::get('/dashboard',function (){
    return view('dashboard.dashboard');
});
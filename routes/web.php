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


/* shop dog*/

Route::get('/spa',function () {
    return view('petspa.spa');
});
Route::get('/petspa',function (){
    return view('petspa.spa');
});

Route::get('/pethousedog','ProductsallController@getListDog');

Route::get('/pethousecat','ProductsallController@getListCat');

Route::get('/accessories','ProductsallController@getListAccessoriDog');

Route::get('/foodpet','ProductsallController@getListFoodDog');

Route::get('/','ProductsallController@getListHome');


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

Route::get('/dashboard ',function (){
    return view('dashboard.index');
});

Route::resource('dashboard/category', 'CategoryController');

Route::resource('dashboard/article','ArticleController');

Route::resource('dashboard/product', 'ProductController');
Auth::routes();

Route::group(['milldeware' => ['web','auth']],function (){

    Route::get('/home',function (){
        return view('home');
    });

    Route::get('/admin',function (){
        if (Auth::user()->admin == 0){
            return view('home');
        }else{
            $users['users'] = \App\User::all();
            return view('dashboard.index',$users);
        }
    })->name('admin');
});


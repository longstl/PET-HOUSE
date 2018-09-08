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

Route::get('detaildog/{id}', ['as'=>'detaildog','uses'=>'ProductsallController@detaildog']);

Route::get('/detailcat/{id}', ['as'=>'detailcat','uses'=>'ProductsallController@detailcat']);

Route::get('/detailaccessories/{id}', ['as'=>'detaildetailaccessories','uses'=>'ProductsallController@detailaccess']);

Route::get('/detailfood/{id}', ['as'=>'detailfood','uses'=>'ProductsallController@detailfood']);

Route::get('/pethousedog',['as'=>'pethousedog','uses'=>'ProductsallController@getListDog']);

Route::get('/pethousecat',['as'=>'pethousecat','uses'=>'ProductsallController@getListCat']);

Route::get('/accessories',['as'=>'accessories','uses'=>'ProductsallController@getListAccessoriDog']);

Route::get('/foodpet',['as'=>'foodpet','uses'=>'ProductsallController@getListFood']);

Route::get('/breed','ArticleController@getListBreed');

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

Route::get('/dashboard ',function (){
    return view('dashboard.index');
});


Route::resource('/dashboard/category', 'CategoryController');

Route::resource('/dashboard/user', 'UserController');

Route::resource('/dashboard/article','ArticleController');

Route::resource('/dashboard/product', 'ProductController');

Route::get('/dashboard/chart', function (){
    return view('dashboard.charts.chart');
});

Route::resource('/petspa', 'spaController');
Route::resource('petspa', 'SpaController');
Route::resource('contact-us', 'ContactController');
Route::resource('verify', 'VerifyController');
Route::resource('verifycontact', 'VerifyContactController');
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

// Cart
Route::get('/add-to-cart', 'ShoppingCartController@addToCart');
Route::get('/cart-view', 'ShoppingCartController@showCart');
Route::get('/delete-cart', 'ShoppingCartController@destroyCart');
Route::put('/edit-cart', 'ShoppingCartController@updateCart');
Route::post('/send-cart', 'ShoppingCartController@checkoutCart');

Route::get('/test', 'ShoppingCartController@demoTransaction');

// Order Manager
Route::get('/dashboard/order', 'OrderController@index');
Route::get('/dashboard/order/change-status', 'OrderController@changeStatus');
Route::delete('/dashboard/order/delete/{id}', 'OrderController@destroy');
Route::get('/history-order/{id}', 'OrderController@findById');

// chart
Route::get('/api-get-chart-data', 'OrderController@getChartDataApi');

Route::get('search',[
   'as'=>'search',
    'uses'=>'ProductsallController@getSearch'
]);

Route::get('/api/categories', 'CategoryController@deleteMultiCategories');
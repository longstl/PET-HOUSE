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

Route::get('/404',function (){
    return view('error.404');
});

Route::get('/user/register',function (){
   return view('partials.login-register');
});

Auth::routes();

Route::group(['prefix' => '/'], function () {
    Route::view('/dashboard', 'dashboard.index')->name('dashboard');
    Route::view('/typography', 'dashboard.pages.typography')->name('typography');
    Route::view('/helper-classes', 'dashboard.pages.helper-classes')->name('helper-classes');
});

Route::group(['prefix' => '/widgets'], function () {
    Route::group(['prefix' => '/cards'], function () {
        Route::view('/basic', 'dashboard.pages.widgets.cards.basic')->name('widgets.cards.basic');
        Route::view('/colored', 'dashboard.pages.widgets.cards.colored')->name('widgets.cards.colored');
        Route::view('/no-header', 'dashboard.pages.widgets.cards.no-header')->name('widgets.cards.no-header');
    });
    Route::group(['prefix' => 'info-box'], function () {
        Route::view('/info-box-1', 'dashboard.pages.widgets.info-box.info-box-1')->name('widgets.info-box.info-box-1');
        Route::view('/info-box-2', 'dashboard.pages.widgets.info-box.info-box-2')->name('widgets.info-box.info-box-2');
        Route::view('/info-box-3', 'dashboard.pages.widgets.info-box.info-box-3')->name('widgets.info-box.info-box-3');
        Route::view('/info-box-4', 'dashboard.pages.widgets.info-box.info-box-4')->name('widgets.info-box.info-box-4');
        Route::view('/info-box-5', 'dashboard.pages.widgets.info-box.info-box-5')->name('widgets.info-box.info-box-5');
    });
});

Route::group(['prefix' => 'ui'], function () {
    Route::view('/alerts', 'dashboard.pages.ui.alerts')->name('ui.alerts');
    Route::view('/animations', 'dashboard.pages.ui.animations')->name('ui.animations');
    Route::view('/badges', 'dashboard.pages.ui.badges')->name('ui.badges');
    Route::view('/breadcrumbs', 'dashboard.pages.ui.breadcrumbs')->name('ui.breadcrumbs');
    Route::view('/buttons', 'dashboard.pages.ui.buttons')->name('ui.buttons');
    Route::view('/collapse', 'dashboard.pages.ui.collapse')->name('ui.collapse');
    Route::view('/colors', 'dashboard.pages.ui.colors')->name('ui.colors');
    Route::view('/dialogs', 'dashboard.pages.ui.dialogs')->name('ui.dialogs');
    Route::view('/icons', 'dashboard.pages.ui.icons')->name('ui.icons');
    Route::view('/labels', 'dashboard.pages.ui.labels')->name('ui.labels');
    Route::view('/list-group', 'dashboard.pages.ui.list-group')->name('ui.list-group');
    Route::view('/media-object', 'dashboard.pages.ui.media-object')->name('ui.media-object');
    Route::view('/modals', 'dashboard.pages.ui.modals')->name('ui.modals');
    Route::view('/notifications', 'dashboard.pages.ui.notifications')->name('ui.notifications');
    Route::view('/pagination', 'dashboard.pages.ui.pagination')->name('ui.pagination');
    Route::view('/preloaders', 'dashboard.pages.ui.preloaders')->name('ui.preloaders');
    Route::view('/progressbars', 'dashboard.pages.ui.progressbars')->name('ui.progressbars');
    Route::view('/range-sliders', 'dashboard.pages.ui.range-sliders')->name('ui.range-sliders');
    Route::view('/sortable-nestable', 'dashboard.pages.ui.sortable-nestable')->name('ui.sortable-nestable');
    Route::view('/tabs', 'dashboard.pages.ui.tabs')->name('ui.tabs');
    Route::view('/thumbnails', 'dashboard.pages.ui.thumbnails')->name('ui.thumbnails');
    Route::view('/tooltips-popovers', 'dashboard.pages.ui.tooltips-popovers')->name('ui.tooltips-popovers');
    Route::view('/waves', 'dashboard.pages.ui.waves')->name('ui.waves');
});

Route::group(['prefix'=>'forms'], function () {
    Route::view('/basic-form-elements', 'dashboard.pages.forms.basic-form-elements')->name('forms.basic-form-elements');
    Route::view('/advanced-form-elements', 'dashboard.pages.forms.advanced-form-elements')->name('advanced-form-elements');
    Route::view('/form-examples', 'dashboard.pages.forms.form-examples')->name('forms.form-examples');
    Route::view('/form-validation', 'dashboard.pages.forms.form-validation')->name('forms.form-validation');
    Route::view('/editors', 'dashboard.pages.forms.editors')->name('forms.editors');
    Route::view('/form-wizard', 'dashboard.pages.forms.form-wizard')->name('forms.form-wizard');
});

Route::group(['prefix'=>'tables', 'as'=>'tables.'], function () {
    Route::view('normal-tables', 'dashboard.pages.tables.normal-tables')->name('normal-tables');
    Route::view('jquery-datatable', 'dashboard.pages.tables.jquery-datatable')->name('jquery-datatable');
    Route::view('editable-table', 'dashboard.pages.tables.editable-table')->name('editable-table');
});

Route::group(['prefix'=>'medias', 'as'=>'medias.'], function() {
    Route::view('image-gallery', 'dashboard.pages.medias.image-gallery')->name('image-gallery');
    Route::view('carousel', 'dashboard.pages.medias.carousel')->name('carousel');
});

Route::group(['prefix'=>'charts', 'as'=>'charts.'], function() {
    Route::view('morris', 'dashboard.pages.charts.morris')->name('morris');
    Route::view('flot', 'dashboard.pages.charts.flot')->name('flot');
    Route::view('chartjs', 'dashboard.pages.charts.chartjs')->name('chartjs');
    Route::view('sparkline', 'dashboard.pages.charts.sparkline')->name('sparkline');
    Route::view('jquery-knob', 'dashboard.pages.charts.jquery-knob')->name('jquery-knob');
});

Route::group(['prefix'=>'examples', 'as'=>'examples.'], function() {
    Route::view('sign-in', 'dashboard.auth.login')->name('sign-in');
    Route::view('sign-up', 'dashboard.auth.register')->name('sign-up');
    Route::view('forgot-password', 'dashboard.auth.passwords.email')->name('forgot-password');
    Route::view('404', 'dashboard.pages.examples.404')->name('404');
    Route::view('500', 'dashboard.pages.examples.500')->name('500');
    Route::view('blank', 'dashboard.pages.examples.blank')->name('blank');
});

Route::group(['prefix'=>'maps', 'as'=>'maps.'], function() {
    Route::view('google-map', 'dashboard.pages.maps.google-map')->name('google-map');
    Route::view('yandex-map', 'dashboard.pages.maps.yandex-map')->name('yandex-map');
    Route::view('jvector-map', 'dashboard.pages.maps.jvector-map')->name('jvector-map');
});
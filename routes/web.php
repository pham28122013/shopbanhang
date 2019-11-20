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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('products.index');
});

Route::namespace('Frontend')->group(function () {
    Route::get('/detail-sanpham/{id}','ProductController@product');
    Route::get('/phukien/{id}','ProductController@accessory');
    Route::get('/sanpham-highlight','ProductController@highlight');
    Route::get('/sanpham-sale','ProductController@sale');
    Route::get('/giohang','ProductController@cart');
    Route::get('/phukien','ProductController@accessoriesList');
    Route::get('/thanhtoan','ProductController@checkout');
});


Route::get('/login','Auth\LoginController@getLogin')->name('users.getlogin');
Route::post('/login','Auth\LoginController@postLogin')->name('users.postlogin');
Route::get('/logout','Auth\LoginController@logout')->name('logout');

Route::namespace('Backend')->middleware('login')->group(function(){
    Route::get('/admin','AdminController@index')->name('admin.index');

    Route::resource('users', 'UserController');
    
});






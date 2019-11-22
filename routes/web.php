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
Route::get('/', function() {
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

Route::namespace('Auth')->group(function () {
    Route::get('/login','LoginController@getLogin')->name('users.getlogin');
    Route::post('/login','LoginController@postLogin')->name('users.postlogin');
    Route::get('/logout','LoginController@logout')->name('logout');
});

Route::namespace('Backend')->prefix('admin')->middleware(['auth', 'admin'])->group(function() {
    Route::get('/','AdminController@index')->name('admin.index');
    Route::resource('users', 'UserController');
    Route::resource('products', 'ProductController')->only(['index', 'create', 'store']);
});






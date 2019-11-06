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


Route::get('/product/list', function(){
    return view('admin.product.list');
});

Route::get('/product/edit', function(){
    return view('admin.product.edit');
});

Route::get('/product/add', function(){
    return view('admin.product.add');
});

Route::namespace('Backend')->group(function(){
    Route::get('/admin','AdminController@index');

    Route::get('/admin/product/list','ProductController@productList')->name('products.list');
    Route::get('/admin/user/add','UserController@useradd')->name('users.add');
    Route::post('/admin/user','UserController@userstore')->name('users.store');
    Route::get('/admin/product/show/{id}','ProductController@productshow')->name('products.show');
    Route::get('/admin/user/{id}/edit','UserController@useredit')->name('users.edit');
    Route::put('/admin/user/{id}','UserController@userupdate')->name('users.update');
    Route::delete('/admin/product/{id}','ProductController@productdelete')->name('products.delete');
});


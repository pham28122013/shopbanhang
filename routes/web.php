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
    return view('pages.index');
});

Route::get('/admin', function(){
    return view('admin.index');
});

Route::get('/product-sale/list', function(){
    return view('admin.product-sale.list');
});

Route::get('/product-sale/edit', function(){
    return view('admin.product-sale.edit');
});

Route::get('/product-sale/add', function(){
    return view('admin.product-sale.add');
});
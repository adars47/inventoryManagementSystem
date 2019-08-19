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
    if(auth::id()==null)
    {
        return view('auth.login');
    }
    return view('home');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/add_products','ProductController@add_product')->name('add_product_form');
Route::post('/products/check_product_duplicate','ProductController@check_product_duplicate')->name('check_product_duplicate');
Route::post('/products/save_product','ProductController@save_product')->name('save_product');
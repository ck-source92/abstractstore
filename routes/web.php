<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoriesController@index')->name('categories');
Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@index')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Route::get('/login/success', 'Auth\LoginController@success')->name('login-success');

Route::get('/dashboard', 'DashboardController@index')
    ->name('dashboard');
Route::get('/dashboard/product', 'DashboardProductController@index')
    ->name('dashboard-product');
Route::get('/dashboard/product/create', 'DashboardProductController@create')
    ->name('dashboard-product');
Route::get('/dashboard/product/{id}', 'DashboardProductController@details')
    ->name('dashboard-product-details');





Auth::routes();


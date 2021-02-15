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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('/','HomeController');
Route::match(array('GET','POST'),'td/wholesalers','HomeController@addWholesalers')->name('td/wholesalers');
Route::match(array('GET','POST'),'td/posts','HomeController@addPosts')->name('td/posts');
Route::get('td/productdetails/{id}', 'HomeController@getProductDetails')->name('td/productdetails');
Route::get('td/categorylist/{id}', 'HomeController@getCategorylist')->name('td/categorylist');
Route::post('login','LoginController@index')->name('login');

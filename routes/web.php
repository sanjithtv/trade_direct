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

/*Route::get('/email', function () {
    return new SendMail();
});*/

Route::resource('/','HomeController');
Route::match(array('GET','POST'),'td/wholesalers','HomeController@addWholesalers')->name('td/wholesalers');
Route::match(array('GET','POST'),'td/posts','HomeController@addPosts')->name('td/posts');
Route::get('td/productdetails/{id}', 'HomeController@getProductDetails')->name('td/productdetails');
Route::get('td/categorylist/{id}', 'HomeController@getCategorylist')->name('td/categorylist');

Route::match(array('GET','POST'),'login','LoginController@index')->name('login');
Route::match(array('GET','POST'),'forgotpwd','LoginController@Forgotpwd')->name('forgotpwd');
Route::match(array('GET','POST'),'logout','LoginController@logout')->name('logout');
Route::match(array('GET','POST'),'wishlist','HomeController@wishlist')->name('wishlist');


Route::post('login','LoginController@index')->name('login');
Route::post('chat','ChatController@index')->name('chat');
Route::get('chatinbox/{id}','ChatController@chatInbox')->name('chatinbox');
Route::post('savemessage','ChatController@saveMessage')->name('savemessage');
Route::post('saveusermessage','ChatController@saveUserMessage')->name('saveusermessage');
Route::post('chatdetails','ChatController@chatDetails')->name('chatdetails');
Route::match(array('GET','POST'),'viewmessage','ChatController@viewMessages')->name('viewmessage');

Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/activate-account/{id}', 'EmailController@activate_account');


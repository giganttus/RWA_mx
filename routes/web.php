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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    //Route::get('/user/orders', 'UsersController@orders')->name('users.orders');

});


Route::get('/ordersrequest', 'OrdersController@ordersrequest')->name('orders.request');
Route::post('submit','OrdersController@save');

Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/ordersedit/{orders}', 'OrdersController@edit')->name('orders.edit');
Route::delete('/ordersdestroy/{orders}', 'OrdersController@destroy')->name('orders.destroy');
Route::put('/ordersupdate/{orders}', 'OrdersController@update')->name('orders.update');

Route::get('/orderstracking', 'OrdersController@orderstracking')->name('orders.tracking');
Route::get('/orderstracker', 'OrdersController@orderstracker')->name('orders.tracker');



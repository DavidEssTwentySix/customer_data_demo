<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['XssSanitizer']], function () {
	
	Route::get('/', 'App\Http\Controllers\CustomerController@index')->name('index');
	Route::get('/customers', 'App\Http\Controllers\CustomerController@index');	
	Route::get('/customer/add', 'App\Http\Controllers\CustomerController@add')->name('add_customer');
	Route::post('/customers', 'App\Http\Controllers\CustomerController@store')->name('newRecord');	
	Route::post('/customers/{id}', 'App\Http\Controllers\CustomerController@display')->name('displayCustomer');	
	Route::delete('/customers/{id}', 'App\Http\Controllers\CustomerController@delete')->name('deleteCustomer');	
	
});

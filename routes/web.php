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


Auth::routes();





Route::group(['name' => 'normal'], function(){

	/*HomeController functions*/
	Route::get('/', 'HomeController@index')->name('home');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/show_car_detail/{id}', 'HomeController@showCarDetail')->name('detal');
	Route::get('/add_car', 'HomeController@addCar')->name('add_car');
	
	Route::get('/search_car', 'CarController@searchAllCar')->name('search_car');
	Route::get('/search_car_filter/', 'CarController@searchsCarByFilter')->name('search_car_filter');
});



Route::group(['middleware' => 'auth'], function(){
	Route::post('/add_new_car/', 'CarController@addNewCar')->name('add_new_car');	
});
Route::group(['prefix' => 'api'], function(){
    Route::get('getcarslist', 'APIController@getCarsList');
    Route::get('getcarslist/homepage', 'APIController@getCarsListForHomePage');
    Route::get('getcarslistperpage', 'APIController@getCarsListPerPage');
});
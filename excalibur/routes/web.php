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
    Route::resource('chambres', 'ChambresController');
    Route::apiResource('chambres', 'ChambresController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api', 'apiController@api')->name('api');

Route::get('/chambers', 'ChambresController@chambers')->name('chambers');
Route::post('/store', 'ChambresController@store')->name('store');

Route::post('/editChambers/{id}', 'ChambresController@editChambers')->name('editChambers');
 
Route::post('/deleteChambers/{id}', 'ChambreController@deleteChambers')->name('deleteChambers');


// Route::get('post/create', 'PostController@create');

// Route::post('post', 'PostController@store');

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

//indice Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('indice','\App\Http\Controllers\IndiceController');
  Route::post('indice/{id}/update','\App\Http\Controllers\IndiceController@update');
  Route::get('indice/{id}/delete','\App\Http\Controllers\IndiceController@destroy');
  Route::get('indice/{id}/deleteMsg','\App\Http\Controllers\IndiceController@DeleteMsg');
});
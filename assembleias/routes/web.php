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

//assembleia Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('assembleia','\App\Http\Controllers\AssembleiaController');
  Route::post('assembleia/{id}/update','\App\Http\Controllers\AssembleiaController@update');
  Route::get('assembleia/{id}/delete','\App\Http\Controllers\AssembleiaController@destroy');
  Route::get('assembleia/{id}/deleteMsg','\App\Http\Controllers\AssembleiaController@DeleteMsg');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//municipio Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('municipio','\App\Http\Controllers\MunicipioController');
  Route::post('municipio/{id}/update','\App\Http\Controllers\MunicipioController@update');
  Route::get('municipio/{id}/delete','\App\Http\Controllers\MunicipioController@destroy');
  Route::get('municipio/{id}/deleteMsg','\App\Http\Controllers\MunicipioController@DeleteMsg');
});

//assembleia Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('assembleia','\App\Http\Controllers\AssembleiaController');
  Route::post('assembleia/{id}/update','\App\Http\Controllers\AssembleiaController@update');
  Route::get('assembleia/{id}/delete','\App\Http\Controllers\AssembleiaController@destroy');
  Route::get('assembleia/{id}/deleteMsg','\App\Http\Controllers\AssembleiaController@DeleteMsg');
  // modal distancia
  Route::get('modal/modal_distancia','\App\Http\Controllers\AssembleiaController@modal_distancia');
});

//Users
Route::group(['middleware'=> 'web'],function(){
  Route::resource('user','\App\Http\Controllers\UserController');
  Route::post('user/{id}/update','\App\Http\Controllers\UserController@update');
  Route::get('user/{id}/delete','\App\Http\Controllers\UserController@destroy');
  Route::get('user/{id}/deleteMsg','\App\Http\Controllers\UserController@DeleteMsg');
  Route::post('user/store', '\App\Http\Controllers\UserController@store');

});

//roles
Route::group(['middleware'=> 'web'],function(){
  Route::resource('role','\App\Http\Controllers\RoleController');
  Route::post('role/{id}/update','\App\Http\Controllers\RoleController@update');
  Route::get('role/{id}/delete','\App\Http\Controllers\RoleController@destroy');
  Route::get('role/{id}/deleteMsg','\App\Http\Controllers\RoleController@DeleteMsg');
});

//Permissions
Route::group(['middleware'=> 'web'],function(){
  Route::resource('permission','\App\Http\Controllers\PermissionController');
  Route::post('permission/{id}/update','\App\Http\Controllers\PermissionController@update');
  Route::get('permission/{id}/delete','\App\Http\Controllers\PermissionController@destroy');
  Route::get('permission/{id}/deleteMsg','\App\Http\Controllers\PermissionController@DeleteMsg');
});


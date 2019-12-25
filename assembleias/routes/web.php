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
  Route::post('user/update','\App\Http\Controllers\UserController@update');
  Route::get('user/{id}/delete','\App\Http\Controllers\UserController@destroy');
  Route::get('user/{id}/deleteMsg','\App\Http\Controllers\UserController@DeleteMsg');
  Route::post('user/store', '\App\Http\Controllers\UserController@store');

});

//roles
Route::group(['middleware'=> 'web'],function(){
  Route::resource('role','\App\Http\Controllers\RoleController');
  Route::post('role/update','\App\Http\Controllers\RoleController@update');
  Route::get('role/delete/{id}','\App\Http\Controllers\RoleController@destroy');
  Route::get('role/edit/{id}','\App\Http\Controllers\RoleController@edit');
  Route::get('role/{id}/deleteMsg','\App\Http\Controllers\RoleController@DeleteMsg');
  Route::post('role/store', '\App\Http\Controllers\RoleController@store');

});

//Permissions
Route::group(['middleware'=> 'web'],function(){
  Route::resource('permission','\App\Http\Controllers\PermissionController');
  Route::post('permission/update','\App\Http\Controllers\PermissionController@update');
  Route::get('permission/delete/{id}','\App\Http\Controllers\PermissionController@destroy');
  Route::get('permission/edit/{id}','\App\Http\Controllers\PermissionController@edit');
  Route::get('permission/{id}/deleteMsg','\App\Http\Controllers\PermissionController@DeleteMsg');
  Route::post('permission/store', '\App\Http\Controllers\PermissionController@store');

});

// garantee roles and permissions
Route::post('user/addRole', 'UserController@addRole');
Route::get('user/revokeRole/{role}/{id}', 'UserController@revokeRole');

Route::post('user/addPermission', 'UserController@addPermission');
Route::get('user/revokePermission/{permission}/{id}', 'UserController@revokePermission');



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

/*Route::get('/', function () {
    return view('home');
})*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('empleado','EmpleadoController');

//Route::group(['middleware' => 'administrador'], function () {
//    Route::resource('empleado','EmpleadoController');
//});


Route::get('/permisos','PermisosController@crear');
Route::get('/aceptacion','AceptacionController@crear');
Route::get('/realizar','RealizarPermisoController@crear');

/*
Route::group(['middleware' => 'empleado'], function () {
    Route::resource('empleado','EmpleadoController');
});
*/

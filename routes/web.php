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
    return view('bienvenido');
});
Route::get('/puntos', function () {
    return view('puntos');
});
Auth::routes();
Route::get('/inicio','HomeController@index')->name('inicio');
Route::resource('producto','ProductoController');
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/home/lista', function () {
    return view('Producto.lista');
});
Route::get('/inicio/agregar','CarrerasController@agregar')->name('agregar');
Route::get('/inicio/solicitar/{id}',['uses'=>'PrestamoController@conseguir']);
Route::get('/inicio/inventario','OpcionesController@inventario')->name('inventario');
Route::get('/inicio/agregar/msg','MensajesController@agregar')->name('m_agregar');
Route::get('/inicio/solicitar/msg','MensajesController@solicitar')->name('m_solicitar');
Route::get('/inicio/eliminar/msg','MensajesController@eliminar')->name('m_eliminar');

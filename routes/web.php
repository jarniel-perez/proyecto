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

Route::get('/', ['as'=>'inicio.index', 'uses'=>'InicioController@index',]);

Route::get('categoria',['as'=>'categoria.index', 'uses'=>'CategoriaController@index',]);
Route::get('categoria/create',['as'=>'categoria.create', 'uses'=>'CategoriaController@create',]);
Route::post('categoria',['as'=>'categoria.store', 'uses'=>'CategoriaController@store']);
Route::get('categoria/{id}/editar',['as'=>'categoria.editar', 'uses'=>'CategoriaController@edit',]);
Route::patch('categoria/{id}',['as'=>'categoria.update', 'uses'=>'CategoriaController@update',]);
Route::get('categoria/{id}/delete',['as'=>'categoria.delete', 'uses'=>'CategoriaController@delete',]);

Route::get('cliente',['as'=>'cliente.index', 'uses'=>'ClienteController@index',]);
Route::get('cliente/create',['as'=>'cliente.create', 'uses'=>'ClienteController@create',]);
Route::post('cliente',['as'=>'cliente.store', 'uses'=>'ClienteController@store']);
Route::get('cliente/{id}/editar',['as'=>'cliente.editar', 'uses'=>'ClienteController@edit',]);
Route::patch('cliente/{id}',['as'=>'cliente.update', 'uses'=>'ClienteController@update',]);
Route::get('cliente/{id}/delete',['as'=>'cliente.delete', 'uses'=>'ClienteController@delete',]);

Route::get('servicio',['as'=>'servicio.index', 'uses'=>'ServicioController@index',]);
Route::get('servicio/create',['as'=>'servicio.create', 'uses'=>'ServicioController@create',]);
Route::post('servicio',['as'=>'servicio.store', 'uses'=>'ServicioController@store']);
Route::get('servicio/{id}/editar',['as'=>'servicio.editar', 'uses'=>'ServicioController@edit',]);
Route::patch('servicio/{id}',['as'=>'servicio.update', 'uses'=>'ServicioController@update',]);
Route::get('servicio/{id}/delete',['as'=>'servicio.delete', 'uses'=>'ServicioController@delete',]);

Route::get('empleado',['as'=>'empleado.index', 'uses'=>'EmpleadoController@index',]);
Route::get('empleado/create',['as'=>'empleado.create', 'uses'=>'EmpleadoController@create',]);
Route::post('empleado',['as'=>'empleado.store', 'uses'=>'EmpleadoController@store']);
Route::get('empleado/{id}/editar',['as'=>'empleado.editar', 'uses'=>'EmpleadoController@edit',]);
Route::patch('empleado/{id}',['as'=>'empleado.update', 'uses'=>'EmpleadoController@update',]);
Route::get('empleado/{id}/delete',['as'=>'empleado.delete', 'uses'=>'EmpleadoController@delete',]);

Route::get('orden_trabajo',['as'=>'orden_trabajo.index', 'uses'=>'OrdentrabajoController@index',]);
Route::get('orden_trabajo/create',['as'=>'orden_trabajo.create', 'uses'=>'OrdentrabajoController@create',]);
Route::post('orden_trabajo',['as'=>'orden_trabajo.store', 'uses'=>'OrdentrabajoController@store']);
Route::get('orden_trabajo/{id}/editar',['as'=>'orden_trabajo.editar', 'uses'=>'OrdentrabajoController@edit',]);
Route::patch('orden_trabajo/{id}',['as'=>'orden_trabajo.update', 'uses'=>'OrdentrabajoController@update',]);
Route::get('orden_trabajo/{id}/delete',['as'=>'orden_trabajo.delete', 'uses'=>'OrdentrabajoController@delete',]);

Route::get('servicio_cliente_especial',['as'=>'servicio_cliente_especial.index', 'uses'=>'ServicioespecialController@index',]);
Route::get('servicio_cliente_especial/create',['as'=>'servicio_cliente_especial.create', 'uses'=>'ServicioespecialController@create',]);
Route::post('servicio_cliente_especial',['as'=>'servicio_cliente_especial.store', 'uses'=>'ServicioespecialController@store']);
Route::get('servicio_cliente_especial/{id}/editar',['as'=>'servicio_cliente_especial.editar', 'uses'=>'ServicioespecialController@edit',]);
Route::patch('servicio_cliente_especial/{id}',['as'=>'servicio_cliente_especial.update', 'uses'=>'ServicioespecialController@update',]);
Route::get('servicio_cliente_especial/{id}/delete',['as'=>'servicio_cliente_especial.delete', 'uses'=>'ServicioespecialController@delete',]);

Route::get('detalle_orden_trabajo',['as'=>'detalle_orden_trabajo.index', 'uses'=>'DetalleordentrabajoController@index',]);
Route::get('detalle_orden_trabajo/create',['as'=>'detalle_orden_trabajo.create', 'uses'=>'DetalleordentrabajoController@create',]);
Route::post('detalle_orden_trabajo',['as'=>'detalle_orden_trabajo.store', 'uses'=>'DetalleordentrabajoController@store']);
Route::get('detalle_orden_trabajo/{id}/editar',['as'=>'detalle_orden_trabajo.editar', 'uses'=>'DetalleordentrabajoController@edit',]);
Route::patch('detalle_orden_trabajo/{id}',['as'=>'detalle_orden_trabajo.update', 'uses'=>'DetalleordentrabajoController@update',]);
Route::get('detalle_orden_trabajo/{id}/delete',['as'=>'detalle_orden_trabajo.delete', 'uses'=>'DetalleordentrabajoController@delete',]);

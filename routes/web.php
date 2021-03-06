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

Route::resource('clientes','ClienteController');
Route::resource('libros','LibrosController');
Route::resource('proveedores','ProveedoresController'); 
Route::resource('contactos','ContactoController');
Route::resource('stock','StockController');
Route::resource('factura','FacturaController');
/*Route::resource('detalle_factura','DetalleFacturaController');*/
Route::get('factura/{id}/detalle/add','FacturaController@detalleadd');
Route::post('factura/{factura_id}/detalle/store','FacturaController@detalleaddstore');
Route::get('factura/detalle/delete/{detalle_id}','FacturaController@detalledelete');
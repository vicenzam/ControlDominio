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

Route::redirect('/', 'dominios');

Route::resource('clientes', 'ClientController');
Route::resource('proveedores', 'ProviderController');
Route::resource('cuentas', 'AccountController');
Route::resource('dominios', 'DomainController');

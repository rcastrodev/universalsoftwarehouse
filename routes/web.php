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

Route::get('/', 'PagesController@index');
Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@home')->name('home');   
    Route::get('agencia/{id}/get-list', 'AgenciasController@getListAgency');
    Route::get('agencia/detalle/{caseNumber}', 'GestionController@caseNumber');
    Route::resource('agencia', 'AgenciasController');

    Route::get('web/get-list', 'WebsController@getList');
    Route::resource('web', 'WebsController');

    Route::get('credito/get-list', 'CreditosController@getList');
    Route::resource('credito', 'CreditosController');

    Route::get('inversion/get-list', 'InversionesController@getList');
    Route::resource('inversion', 'InversionesController');

    Route::get('cuenta/get-list', 'CuentasController@getList');
    Route::resource('cuenta', 'CuentasController');

    Route::get('crm/get-list', 'CRMController@getList');
    Route::resource('crm', 'CRMController');

    Route::get('contabilidad/get-list', 'ContabilidadController@getList');
    Route::resource('contabilidad', 'ContabilidadController');

    Route::get('gestion', 'GestionController@index')->name('gestion');
    Route::get('gestion/get-list', 'GestionController@getList');
    Route::get('gestion/detalle/{caseNumber}', 'GestionController@caseNumber');
    //Route::get('gestion/find-case', 'GestionController@findCase')->name('findCaseGestion');

    Route::get('bitacora', 'BitacoraController@index')->name('bitacora');
    Route::get('bitacora/get-list', 'BitacoraController@getList');
    Route::get('bitacora/detalle/{caseNumber}', 'BitacoraController@caseNumber')->name('bitacora.detalle');
});

Auth::routes();



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

Route::get('/api/v1/UF', function () {
    
});

Route::get('/api/v1/uf/{CO_UF?}', 'API\ApiController@index');

Route::get('/api/v1/City/{CO_UF?}', 'API\ApiController@city');

Route::get('/api/Select', 'API\ApiController@SelectEndereco');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Empleado','App\Http\Controllers\EmpleadoController@index');
Route::post('/Empleado','App\Http\Controllers\EmpleadoController@store');
Route::put('/Empleado/{id}','App\Http\Controllers\EmpleadoController@update');
Route::put('/Empleado/{id}','App\Http\Controllers\EmpleadoController@destroy');

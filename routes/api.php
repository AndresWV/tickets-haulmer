<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/events', 'App\Http\Controllers\EventoController@index');
Route::get('/event/{name}', 'App\Http\Controllers\EventoController@searchEventName');
Route::post('/tickets-vendidos', 'App\Http\Controllers\TicketVendidoController@store');
Route::post('/nuevo-evento', 'App\Http\Controllers\EventoController@store');
Route::get('/orders/{usuario}', 'App\Http\Controllers\TicketVendidoController@index');
Route::get('/users', 'App\Http\Controllers\UsuarioEventoController@index');
Route::post('/createUser', 'App\Http\Controllers\UsuarioEventoController@store');


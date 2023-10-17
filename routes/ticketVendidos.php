<?php


use Illuminate\Support\Facades\Route;

Route::post('/tickets-vendidos', 'App\Http\Controllers\TicketVendidoController@store');
Route::get('/orders/{usuario}', 'App\Http\Controllers\TicketVendidoController@index');

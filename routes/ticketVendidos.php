<?php


use Illuminate\Support\Facades\Route;

Route::post('/tickets-vendidos', 'App\Http\Controllers\TicketVendidoController@store');
Route::get('/orders/{usuario}', 'App\Http\Controllers\TicketVendidoController@index');
Route::put('/tickets-vendidos/{ticketVendido}', 'App\Http\Controllers\TicketVendidoController@update');
Route::delete('/tickets-vendidos/{ticketVendido}', 'App\Http\Controllers\TicketVendidoController@destroy');

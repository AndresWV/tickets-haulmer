<?php


use Illuminate\Support\Facades\Route;

Route::post('/nuevo-evento', 'App\Http\Controllers\EventoController@store');
Route::get('/events', 'App\Http\Controllers\EventoController@index');
Route::get('/event/{name}', 'App\Http\Controllers\EventoController@searchEventName');
Route::put('/event/{evento}', 'App\Http\Controllers\EventoController@update');
Route::delete('/event/{evento}', 'App\Http\Controllers\EventoController@destroy');

<?php


use Illuminate\Support\Facades\Route;

Route::get('/users', 'App\Http\Controllers\UsuarioEventoController@index');
Route::post('/createUser', 'App\Http\Controllers\UsuarioEventoController@store');
Route::put('/users/{usuarioEvento}', 'App\Http\Controllers\UsuarioEventoController@update');
Route::delete('/users/{usuarioEvento}', 'App\Http\Controllers\UsuarioEventoController@destroy');

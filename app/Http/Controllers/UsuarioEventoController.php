<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioEvento;
use Illuminate\Support\Facades\Hash;
use Throwable;
class UsuarioEventoController extends Controller
{
    public function index()
    {
        try{
            $users = UsuarioEvento::all()->makeHidden('password');
            return response()->success($users);
        }catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'mail' => 'required|email|unique:usuario_eventos',
                'password' => 'required|string|min:6',
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);
            $usuario = UsuarioEvento::create($validatedData)->makeHidden('password');

            return response()->success($usuario, 'Usuario creado con éxito', 201);
        }catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }
}

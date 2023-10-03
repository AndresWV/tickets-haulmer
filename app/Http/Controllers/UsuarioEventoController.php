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
            $users = UsuarioEvento::all();
            return response()->json($users);
        }catch (Throwable $e) {
            error_log($e->getMessage());
            return response([
                'message' => 'server_error',
                'code' => 500,
                'data' => []
            ], 500);
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

            $usuario = UsuarioEvento::create($validatedData);

            return response()->json(['message' => 'Usuario creado con éxito', 'data' => $usuario], 201);
        }catch (Throwable $e) {
            error_log($e->getMessage());
            return response([
                'message' => 'server_error',
                'code' => 500,
                'data' => []
            ], 500);
        }
    }
}

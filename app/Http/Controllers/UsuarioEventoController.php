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
        try {
            $users = UsuarioEvento::all()->makeHidden('password');
            return response()->success($users);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'mail' => 'required|email|unique:usuario_eventos',
                'password' => 'required|string|min:6',
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);
            $usuario = UsuarioEvento::create($validatedData)->makeHidden('password');

            return response()->success($usuario, 'Usuario creado con éxito', 201);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }

    public function update(UsuarioEvento $usuarioEvento, Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nombre' => 'required|string',
                'apellido' => 'required|string',
                'mail' => 'required|email',
                'password' => 'required|string|min:6',
            ]);

            $usuarioEmail = UsuarioEvento::where('mail', $request->mail);
            error_log($usuarioEmail->get());
            if ($usuarioEmail->count() > 0) {
                $usuarioEmail = $usuarioEmail->first();
                if ($usuarioEmail->id != $usuarioEvento->id) {
                    return response()->error('El mail ya está en uso', 400);
                }
            }

            $validatedData['password'] = Hash::make($validatedData['password']);
            $usuarioEvento->update($validatedData);

            return response()->success($usuarioEvento->makeHidden('password'), 'Usuario actualizado con éxito', 200);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }

    public function destroy(UsuarioEvento $usuarioEvento)
    {
        try {
            $usuarioEvento->delete();
            return response()->success(null, 'Usuario eliminado con éxito', 200);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }
}

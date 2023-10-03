<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsuarioEvento;
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
}

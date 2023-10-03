<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $eventos = Evento::select('nombre_evento', 'fecha', 'hora', 'precio', 'url_entradas')->get();
        return response()->json($eventos);
    }
}

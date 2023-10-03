<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        $events = Evento::select('nombre_evento', 'fecha', 'hora', 'precio', 'url_entradas')->get();
        return response()->json($events);
    }
    public function searchEventName($name){
        $events = Evento::where('nombre_evento', 'like', "%$name%")->get();
        return response()->json($events);
    }
}

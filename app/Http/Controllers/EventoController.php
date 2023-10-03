<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use Illuminate\Http\Request;
use Throwable;
class EventoController extends Controller
{
    public function index()
    {
        try{
            $events = Evento::select('nombre_evento', 'fecha', 'hora', 'precio', 'url_entradas')->get();
            return response()->json($events);
        }catch (Throwable $e) {
            error_log($e->getMessage());
            return response([
                'message' => 'server_error',
                'code' => 500,
                'data' => []
            ], 500);
        }
    }
    public function searchEventName($name){
        try{
            $events = Evento::where('nombre_evento', 'like', "%$name%")->get();
            return response()->json($events);
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

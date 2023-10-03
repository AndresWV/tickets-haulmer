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
    public function store(Request $request)
    {
        try {
            $data = $request->all();

            // Validación de datos (puedes personalizar las reglas de validación según tus necesidades)
            $validatedData = $this->validate($request, [
                'nombre_evento' => 'required|string',
                'fecha' => 'required|date',
                'hora' => 'required|string',
                'lugar' => 'required|string',
                'precio' => 'required|numeric',
                'disponibilidad' => 'required|integer',
                'categoria' => 'required|string',
                'descripcion' => 'required|string',
                'url_entradas' => 'required|string|url',
            ]);

            // Crear un nuevo evento
            $evento = Evento::create($validatedData);

            return response()->json(['message' => 'Evento creado con éxito', 'data' => $evento], 201);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response([
                'message' => 'Error interno del servidor',
                'code' => 500,
                'data' => [],
            ], 500);
        }
    }
}

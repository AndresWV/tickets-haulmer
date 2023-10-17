<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Throwable;

class EventoController extends Controller
{
    public function index()
    {
        try {
            $events = Evento::select('nombre_evento', 'fecha', 'hora', 'precio', 'url_entradas')->get();
            return response()->success($events);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }

    public function searchEventName($name)
    {
        try {
            $events = Evento::where('nombre_evento', 'like', "%$name%")->get();
            return response()->success($events);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
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
            return response()->success($evento, 'Evento creado con éxito', 201);
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }

    public function update(Evento $evento, Request $request)
    {
        try {
            $data = request()->all();
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
            $evento->update($validatedData);
            return response()->success(null, 'Evento actualizado con éxito');
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }


    public function destroy(Evento $evento)
    {
        try {
            $evento->delete();
            return response()->success(null, 'Evento eliminado con éxito');
        } catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }
}

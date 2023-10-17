<?php

namespace App\Http\Controllers;

use App\Models\UsuarioEvento;
use Illuminate\Http\Request;
use App\Models\TicketVendido;
use Throwable;

class TicketVendidoController extends Controller
{
    public function index(UsuarioEvento $usuario){

        try{
            $tickets = $usuario->ticketsVendidos()
                ->orderBy('created_at','desc')
                ->get();
            return response()->success($tickets);
        }catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }
    public function store(Request $request)
    {

        try{
            $validatedData = $request->validate([
                'user_id' => 'required|integer',
                'event_id' => 'required|integer',
                'precio' => 'required|numeric',
            ]);

            $ticketVendido = TicketVendido::create($validatedData);
            return response()->success($ticketVendido, 'Ticket vendido creado con éxito', 201);
        }catch (Throwable $e) {
            error_log($e->getMessage());
            return response()->error();
        }
    }
}

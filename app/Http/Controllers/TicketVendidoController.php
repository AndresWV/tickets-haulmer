<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketVendido;
class TicketVendidoController extends Controller
{
    public function index($idUser){
        $tickets = TicketVendido::where('user_id','like',"%$idUser%")
            ->orderBy('created_at','desc')
            ->get();
        return response()->json($tickets);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'event_id' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $ticketVendido = TicketVendido::create($validatedData);

        return response()->json(['message' => 'Ticket vendido creado con exito', 'data' => $ticketVendido], 201);
    }
}

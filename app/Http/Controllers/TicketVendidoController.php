<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketVendido;
class TicketVendidoController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'event_id' => 'required|integer',
            'precio' => 'required|numeric',
        ]);

        $ticketVendido = TicketVendido::create($validatedData);

        return response()->json(['message' => 'Ticket vendido creado con éxito', 'data' => $ticketVendido], 201);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketVendido;
use Throwable;

class TicketVendidoController extends Controller
{
    public function index($idUser){

        try{
            $tickets = TicketVendido::where('user_id','like',"%$idUser%")
                ->orderBy('created_at','desc')
                ->get();
            return response()->json($tickets);
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

        try{
            $validatedData = $request->validate([
                'user_id' => 'required|integer',
                'event_id' => 'required|integer',
                'precio' => 'required|numeric',
            ]);

            $ticketVendido = TicketVendido::create($validatedData);

            return response()->json(['message' => 'Ticket vendido creado con exito', 'data' => $ticketVendido], 201);
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

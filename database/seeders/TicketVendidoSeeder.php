<?php

namespace Database\Seeders;

use App\Models\TicketVendido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketVendidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Simular la venta de 10 boletos con diferentes eventos y usuarios
        for ($i = 1; $i <= 10; $i++) {
            $eventoId = rand(1, 20);
            $usuarioId = rand(1, 5);
            $precio = rand(10, 100);

            TicketVendido::create([
                'user_id' => $usuarioId,
                'event_id' => $eventoId,
                'precio' => $precio,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Evento;
use App\Models\TicketVendido;
use App\Models\UsuarioEvento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\Ticket;

class TicketVendidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketVendido::factory()
            ->count(10)
            ->create();
    }
}

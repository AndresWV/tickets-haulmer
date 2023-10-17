<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    public function run(): void
    {

        Evento::factory()->count(20)->create();
    }
}

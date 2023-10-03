<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    public function run()
    {
        $eventos = [
            [
                "nombre_evento" => "Concierto de Rock en Vivo",
                "fecha" => "2023-11-15",
                "hora" => "20:00",
                "lugar" => "Estadio Principal",
                "precio" => 40.0,
                "disponibilidad" => 500,
                "categoria" => "Concierto de Música",
                "descripcion" => "Un emocionante concierto de rock en vivo con bandas populares.",
                "url_entradas" => "https://example.com/entradas/concierto-rock"
            ],
        ];

        DB::table('eventos')->insert($eventos);
    }
}

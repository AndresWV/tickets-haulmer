<?php

namespace Database\Seeders;

use App\Models\UsuarioEvento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UsuarioEventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        UsuarioEvento::factory()->count(5)->create();
    }
}

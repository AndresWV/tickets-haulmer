<?php

namespace Database\Seeders;

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
        $usuarios = [
            [
                'nombre' => 'Usuario1',
                'apellido' => 'Apellido1',
                'mail' => 'usuario1@example.com',
                'password' => Hash::make('contraseña1'),
            ],
            [
                'nombre' => 'Usuario2',
                'apellido' => 'Apellido2',
                'mail' => 'usuario2@example.com',
                'password' => Hash::make('contraseña2'),
            ],
            [
                'nombre' => 'Usuario3',
                'apellido' => 'Apellido3',
                'mail' => 'usuario3@example.com',
                'password' => Hash::make('contraseña3'),
            ],
            [
                'nombre' => 'Usuario4',
                'apellido' => 'Apellido4',
                'mail' => 'usuario4@example.com',
                'password' => Hash::make('contraseña4'),
            ],
            [
                'nombre' => 'Usuario5',
                'apellido' => 'Apellido5',
                'mail' => 'usuario5@example.com',
                'password' => Hash::make('contraseña5'),
            ],
        ];

        DB::table('usuario_eventos')->insert($usuarios);
    }
}

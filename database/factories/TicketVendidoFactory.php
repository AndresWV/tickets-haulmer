<?php

namespace Database\Factories;

use App\Models\Evento;
use App\Models\UsuarioEvento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TicketVendido>
 */
class TicketVendidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => UsuarioEvento::inRandomOrder()->first(),
            'event_id' => Evento::inRandomOrder()->first(),
            'precio' => fake()->randomDigit(),

        ];
    }
}

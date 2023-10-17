<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'nombre_evento' => fake()->sentence(3),
            'fecha' => fake()->date(),
            'hora' => fake()->time(),
            'lugar' => fake()->address(),
            'precio' => fake()->randomFloat(2, 0, 1000),
            'disponibilidad' => fake()->randomDigit(),
            'categoria' => fake()->randomElement(['concierto', 'teatro', 'exposicion', 'cine']),
            'descripcion' => fake()->text(),
            'url_entradas' => fake()->url(),
        ];


    }


}

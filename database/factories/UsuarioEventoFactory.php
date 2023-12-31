<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsuarioEvento>
 */
class UsuarioEventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'mail' => fake()->unique()->safeEmail(),
            'password' => fake()->password(),

        ];
    }
}

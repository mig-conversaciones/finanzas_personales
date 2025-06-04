<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'tipo' => $this->faker->randomElement(['ingreso', 'gasto']),
            'color' => $this->faker->safeHexColor(),
            'icono' => 'bi-wallet', // podés luego cambiarlo por cualquier ícono de Bootstrap Icons
            'user_id' => 1, // asumimos que ya existe un usuario con ID 1
        ];
    }
}

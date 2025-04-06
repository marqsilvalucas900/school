<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Periodo>
 */
class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ano' => $this->faker->numberBetween(2000, 2025),
            'descricao' => $this->faker->word,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

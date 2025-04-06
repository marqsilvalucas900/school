<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Periodo;
use App\Models\Sala;        
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turma>
 */
class TurmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'periodo_id' => Periodo::factory(),
            'sala_id' => Sala::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

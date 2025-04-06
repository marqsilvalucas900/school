<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Disciplina;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professor>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'nome' => $this->faker->name,
            // 'contato' => $this->faker->phoneNumber,
            // 'created_at' => now(),
            // 'updated_at' => now(),
            'disciplina_id' => Disciplina::factory()
        ];
    }
}

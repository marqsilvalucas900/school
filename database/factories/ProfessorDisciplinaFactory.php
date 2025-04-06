<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Professor;
use App\Models\Disciplina;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfessorDisciplina>
 */
class ProfessorDisciplinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'professores_id' => Professor::inRandomOrder()->first()->id,
           'disciplina_id' => Disciplina::inRandomOrder()->first()->id,
        ];
    }
}

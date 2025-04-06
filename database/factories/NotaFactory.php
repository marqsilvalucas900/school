<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Disciplina;
use App\Models\Aluno;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'aluno_id' => Aluno::inRandomOrder()->first()->id,
            'disciplina_id' => Disciplina::inRandomOrder()->first()->id,
            'tipo_avaliacao' => $this->faker->randomElement(['Prova', 'Trabalho', 'Seminário']),
            'nota' => $this->faker->randomFloat(2, 0, 10),  // Gera uma nota entre 0 e 10 com duas casas decimais
            'data_avaliacao' => $this->faker->date(),
        ];
    }
}
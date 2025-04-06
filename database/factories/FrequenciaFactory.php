<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aluno;
use App\Models\Disciplina;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Frequencia>
 */
class FrequenciaFactory extends Factory
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
            'data' => $this->faker->date(),
            'status' => $this->faker->randomElement(['Presente', 'Ausente', 'Justificado']),

        ];
    }
}

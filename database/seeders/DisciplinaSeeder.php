<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professor;
use App\Models\Disciplina;


class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disciplina::factory()->count(20)->create();
        $professores = Professor::pluck('id')->toArray();

        // Atualiza cada professor com um disciplina_id aleatório
        Disciplina::all()->each(function ($disciplina) use ($professores) {
            // Atribui um disciplina_id aleatório para o professor
            $disciplina->professor_id = $professores[array_rand($professores)];
            $disciplina->save();
        });
    }
}

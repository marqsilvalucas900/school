<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlunoSeeder;
use Database\Seeders\ProfessorSeeder;
use Database\Seeders\Disciplina;
use Database\Seeders\FrequenciaSeeder;
use Database\Seeders\ProfessorDisciplinaSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // $this->call(AlunoSeeder::class);
        // $this->call(ProfessorSeeder::class);
        // $this->call(DisciplinaSeeder::class);
        // $this->call(FrequenciaSeeder::class);
        // $this->call(NotaSeeder::class);
        // $this->call(SalaSeeder::class);
        // $this->call(PeriodoSeeder::class);
        // $this->call(TurmaSeeder::class);
        $this->call(MatriculaSeeder::class);


    }
}

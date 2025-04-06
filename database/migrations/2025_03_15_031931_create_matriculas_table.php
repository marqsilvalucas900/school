<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id();
            
            // Chave estrangeira para 'alunos'
            $table->foreignId('aluno_id')
                ->constrained('alunos')
                ->onDelete('cascade'); // Se o aluno for deletado, a matrícula será deletada
            
            // Chave estrangeira para 'turmas'
            $table->foreignId('turma_id')
                ->constrained('turmas')
                ->onDelete('cascade'); // Se a turma for deletada, a matrícula será deletada

            $table->date('data_matricula'); // Data de quando a matrícula foi feita
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matricula');
    }
};

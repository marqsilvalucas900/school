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
        Schema::create('frequencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')
                ->constrained('alunos')
                ->onDelete('cascade');
            $table->foreignId('disciplina_id')
                ->constrained('disciplinas')
                ->onDelete('cascade');
            $table->date('data');
            $table->enum('status', ['Presente', 'Ausente','Justificado']);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('frequencias');
    }
};

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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('aluno_id')
                ->constrained('alunos')
                ->onDelete('cascade');

            $table->foreignId('disciplina_id')
                ->constrained('disciplinas')
                ->onDelete('cascade');

            $table->string('tipo_avaliacao', 50)->nullable();
            $table->decimal('nota', 5, 2)->nullable();
            $table->date('data_avaliacao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};

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
       Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            
            // Chave estrangeira para 'periodos'
            $table->foreignId('periodo_id')
                ->constrained('periodos')
                ->onDelete('cascade'); // Deleta a turma se o período for deletado

            // Chave estrangeira para 'salas'
            $table->foreignId('sala_id')
                ->nullable() // Se a sala for deletada, essa referência pode ser 'null'
                ->constrained('salas')
                ->onDelete('set null');
            
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};

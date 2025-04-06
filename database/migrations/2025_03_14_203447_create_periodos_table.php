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
         Schema::create('periodos', function (Blueprint $table) {
            $table->id();
            $table->integer('ano'); // Exemplo: 1 para "1º Ano"
            $table->string('descricao', 100)->nullable(); // Exemplo: "1º Ano"
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periodos');
    }
};

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
    Schema::create('servicos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');           // Nome do serviço
        $table->decimal('valor', 8, 2);   // Preço
        $table->integer('duracao');       // Duração em minutos
        $table->string('descricao', 100); // Resumo (máx. 100 caracteres)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};

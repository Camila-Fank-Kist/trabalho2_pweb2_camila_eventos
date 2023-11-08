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
        Schema::create('apresentacao', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',100); 
            $table->foreignId('apresentador_id')->constrained('apresentador')->default(null)->onDelete('cascade');
            $table->foreignId('categoria_apresentacao_id')->constrained('categoria_apresentacao')->default(null)->onDelete('cascade');
            $table->string('descricao',200)->nullable(); 
            $table->string('imagem',200)->nullable();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apresentacao');
    }
};

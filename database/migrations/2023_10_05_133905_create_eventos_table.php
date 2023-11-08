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
        Schema::create('evento', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->foreignId('categoria_evento_id')->constrained('categoria_evento')->default(null)->onDelete('cascade');
            $table->foreignId('local_id')->constrained('local')->default(null)->onDelete('cascade');
            $table->date('data');
            $table->timeTz('hora_inicio', $precision = 0);
            $table->timeTz('hora_fim', $precision = 0)->nullable();
            $table->string('descricao',200)->nullable();
            $table->decimal('precoBRL',10,2);
            $table->string('imagem',200)->nullable();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento');
    }
};

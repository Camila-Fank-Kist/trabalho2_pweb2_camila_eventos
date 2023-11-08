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
        Schema::create('evento_apresentacao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apresentacao_id')->constrained('apresentacao')->default(null)->onDelete('cascade');
            $table->foreignId('evento_id')->constrained('evento')->default(null)->onDelete('cascade');
            $table->timeTz('hora_inicio', $precision = 0);
            $table->timeTz('hora_fim', $precision = 0)->nullable();
            //$table->decimal('precoBRL',10,2);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_apresentacao');
    }
};

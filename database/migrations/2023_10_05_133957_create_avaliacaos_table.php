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
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->default(null)->onDelete('cascade');
            $table->foreignId('evento_id')->constrained('evento')->default(null)->onDelete('cascade');
            $table->integer('nota');
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
        Schema::dropIfExists('avaliacao');
    }
};

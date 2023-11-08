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
        Schema::create('local', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->foreignId('tipo_local_id')->nullable()->constrained('tipo_local')->default(null)->onDelete('set null');
            $table->integer('capacidade');
            $table->string('website',200)->nullable();
            $table->string('telefone',20);
            $table->string('endereco',100); //futuramente: endereco_id
            //$table->string('pais',50); 
            //$table->string('municipio',50);
            //$table->string('rua',50)->nullable();
            //$table->string('bairro',50)->nullable();
            //$table->integer('numero')->nullable();
            $table->string('descricao',100)->nullable();
            $table->string('imagem',200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local');
    }
};

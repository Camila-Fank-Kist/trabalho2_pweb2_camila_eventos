<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Apresentacao;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Categoria_EventoSeeder::class,
            Categoria_ApresentacaoSeeder::class,
            PagamentoSeeder::class,
            Tipo_LocalSeeder::class,
            LocalSeeder::class,
            ApresentadorSeeder::class,
            ApresentacaoSeeder::class,
            EventoSeeder::class,
            Evento_ApresentacaoSeeder::class,
            UserSeeder::class,
            PedidoSeeder::class,
            AvaliacaoSeeder::class,
        ]);
    }
}

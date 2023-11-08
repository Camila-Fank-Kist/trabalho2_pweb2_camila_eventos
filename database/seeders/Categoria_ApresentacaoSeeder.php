<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Categoria_ApresentacaoSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('pt_BR');
        for ($i=0; $i<5; $i++) {
            DB::table('categoria_apresentacao')->insert([
                'nome'=>$faker->randomElement($array = array ('Show', 'Palestra', 'Stand up', 'Seminário')),
            ]);
        }
    }
}
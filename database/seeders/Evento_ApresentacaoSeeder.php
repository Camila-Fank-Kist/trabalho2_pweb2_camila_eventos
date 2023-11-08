<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Evento_ApresentacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('evento_apresentacao')->insert(
                ['apresentacao_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'evento_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'hora_inicio'=>$fake->time($format = 'H:i:s', $min = 'now'),
                 'hora_fim'=>$fake->time($format = 'H:i:s', $min = 'now'),
                ]
            ); 
        }
    }
}

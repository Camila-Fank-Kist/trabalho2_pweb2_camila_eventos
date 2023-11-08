<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AvaliacaoSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('avaliacao')->insert(
                ['user_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'evento_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'nota'=>$fake->numberBetween($min = 0, $max = 10),
                 'descricao'=>$fake->sentence($nbWords = 5, $variableNbWords = true),
                 'imagem'=> $fake->image( $dir = 'public/storage/imagem/avaliacao',640,480, null, true),
                ]
            );
        }
    }
}

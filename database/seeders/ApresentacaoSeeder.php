<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ApresentacaoSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('apresentacao')->insert(
                ['titulo'=>$fake->word,
                 'apresentador_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'categoria_apresentacao_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'descricao'=>$fake->sentence($nbWords = 5, $variableNbWords = true),
                 'imagem'=> $fake->image( $dir = 'public/storage/imagem/apresentacao',640,480, null, true),
                ] 
            );
        }
    }
}

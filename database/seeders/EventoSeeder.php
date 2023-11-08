<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('evento')->insert(
                ['nome'=>$fake->word,
                 'categoria_evento_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'local_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'data'=>$fake->date($format = 'Y-m-d', $min = 'now'),
                 'hora_inicio'=>$fake->time($format = 'H:i:s', $min = 'now'),
                 'hora_fim'=>$fake->time($format = 'H:i:s', $min = 'now'),
                 'descricao'=>$fake->sentence($nbWords = 5, $variableNbWords = true),
                 'imagem'=> $fake->image( $dir = 'public/storage/imagem/evento',640,480, null, true),
                 'precoBRL'=>$fake->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 2000),
                ]
            );
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LocalSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('local')->insert(
                ['nome'=>$fake->jobTitle,
                 'tipo_local_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'capacidade'=>$fake->numberBetween($min = 50, $max = 90000),
                 'website'=>$fake->domainName,
                 'telefone'=>$fake->phoneNumber,
                 'endereco'=>$fake->address,
                 'descricao'=>$fake->sentence($nbWords = 5, $variableNbWords = true),
                 'imagem'=> $fake->image( $dir = 'public/storage/imagem/local',640,480, null, true),
                ]
            );
        }
    }
}

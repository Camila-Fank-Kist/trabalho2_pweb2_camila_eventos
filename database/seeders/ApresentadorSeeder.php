<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ApresentadorSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('apresentador')->insert(
                ['nome'=>$fake->name,
                 'data_nascimento'=>$fake->date($format = 'Y-m-d', $max = 'now'),
                 'telefone'=>$fake->phoneNumber,
                 'biografia'=>$fake->text($maxNbChars = 200),
                 'website'=>$fake->domainName,
                 'imagem'=> $fake->image( $dir = 'public/storage/imagem/apresentador',640,480, null, true),
                ] 
            );
        }
    }
}

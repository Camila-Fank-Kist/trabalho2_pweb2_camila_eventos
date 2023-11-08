<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PedidoSeeder extends Seeder
{
    public function run(): void
    {
        $fake = Faker::create("pt_BR");
        foreach(\range(1,5) as $index){
            DB::table('pedido')->insert(
                ['user_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'evento_id'=>$fake->numberBetween($min = 1, $max = 5),
                 'quantidade'=>$fake->numberBetween($min = 1, $max = 10),
                 'pagamento_id'=>$fake->numberBetween($min = 1, $max = 5),
                ]
            );
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Apresentador extends Model 
{
    use HasFactory;

    protected $table = "apresentador";

    protected $fillable = [
        'nome',
        'telefone',
        'data_nascimento',
        'biografia',
        'website', 
        'imagem',
    ];

    protected $casts = [
        'data_nascimento' => 'datetime:Y-m-d',
    ];

    public function apresentacao(){
        //relacionamento 1 - n 
        return $this->hasMany(Apresentacao::class);
    }
}
 
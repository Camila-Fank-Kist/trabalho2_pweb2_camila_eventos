<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento_Apresentacao extends Model
{
    use HasFactory; 

    protected $table = "evento_apresentacao";

    protected $fillable = [
        'apresentacao_id',
        'evento_id',
        'hora_inicio',
        'hora_fim',
    ];

    protected $casts = [
        'apresentacao_id'=> "integer",
        'evento_id'=> "integer",
        'hora_inicio'=> "timestamp: H:i:sT",
        'hora_fim'=> "timestamp: H:i:sT",
    ];

    public function apresentacao(){
        //relacionamento 1 - 1 (um para um)
        return $this->belongsTo(Apresentacao::class,
            'apresentacao_id','id');
    }

    public function evento(){
        //relacionamento 1 - 1 (um para um) 
        return $this->belongsTo(Evento::class,
            'evento_id','id');
    }
}

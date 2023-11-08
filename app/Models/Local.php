<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $table = "local"; 

    protected $fillable = [
        'nome',
        'tipo_local_id',
        'capacidade',
        'website',
        'telefone',
        'endereco', //futuramente: endereco_id 
        'descricao',
        'imagem',
    ];
    
    protected $casts = [
        'tipo_local_id'=> "integer",
        'capacidade'=> "integer",
    ];

    public function tipo_local(){
        //relacionamento 1 - 1 
        return $this->belongsTo(Tipo_Local::class,
            'tipo_local_id','id');
    }

    public function evento(){
        //relacionamento 1 - n
        return $this->hasMany(Evento::class);
    }

    //futuramente: listar todos os eventos_apresentacoes ou apresentacoes que ocorrerão no local
}
 
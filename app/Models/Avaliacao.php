<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model  
{
    use HasFactory; 

    protected $table = "avaliacao";

    protected $fillable = [
        'user_id',
        'evento_id',
        'nota',
        'descricao',
        'imagem',
    ];

    protected $casts = [
        'user_id'=> "integer",
        'evento_id'=> "integer",
        'nota'=> "integer",
    ];

    public function user(){
        //relacionamento 1 - 1
        return $this->belongsTo(User::class,
            'user_id','id');
    }

    public function evento(){
        //relacionamento 1 - 1
        return $this->belongsTo(Evento::class,
            'evento_id','id');
    }
}

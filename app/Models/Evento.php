<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{ 
    use HasFactory; 

    protected $table = "evento"; 

    protected $fillable = [
        'nome',
        'categoria_evento_id',
        'local_id',
        'data',
        'hora_inicio',
        'hora_fim',
        'descricao',
        'precoBRL',
        'imagem',
    ];
    
    protected $casts = [
        'categoria_evento_id'=> "integer",
        'local_id'=> "integer",
        'data'=> 'datetime:Y-m-d',
        'hora_inicio'=> "timestamp: H:i:sT",
        'hora_fim'=> "timestamp: H:i:sT",
        'precoBRL'=> "float",
    ];

    public function categoria_evento(){
        //relacionamento 1 - 1
        return $this->belongsTo(Categoria_Evento::class,
        'categoria_evento_id','id');
    }

    public function local(){
        //relacionamento 1 - 1
        return $this->belongsTo(Local::class,
            'local_id','id');
    }

    public function evento_apresentacao(){
        //relacionamento 1 - n
        return $this->hasMany(Evento_Apresentacao::class);
    }

    public function pedido(){ 
        //relacionamento 1 - n (um para n)
        return $this->hasMany(Pedido::class);
    }

    public function avaliacao(){
        //relacionamento 1 - n (um para n)
        return $this->hasMany(Avaliacao::class);
    }

    //listar todos as apresentaçoes que estão no evento 
    public function apresentacoes(){
        //relacionamento n - n
        return $this->belongsToMany(Apresentacao::class,
            'evento_apresentacao','id');
    }//'evento_apresentacao': tabela intermediária que será usada para conectar apresentacao e evento
}

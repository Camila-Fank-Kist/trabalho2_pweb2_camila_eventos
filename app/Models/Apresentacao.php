<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Apresentacao extends Model
{
    use HasFactory; 
 
    protected $table = "apresentacao";

    protected $fillable = [
        'titulo',
        'apresentador_id',
        'categoria_apresentacao_id',
        'descricao',
        'imagem',
    ];

    protected $cast = [
        'apresentador_id' =>'integer',
        'categoria_apresentacao_id' =>'integer',
    ];

    public function apresentador(){
        //relacionamento 1 - 1
        return $this->belongsTo(Apresentador::class,
        'apresentador_id','id');
    }

    public function categoria_apresentacao(){
        //relacionamento 1 - 1
        return $this->belongsTo(Categoria_Apresentacao::class,
        'categoria_apresentacao_id','id');
    }

    public function evento_apresentacao(){ 
        //relacionamento 1 - n
        return $this->hasMany(Evento_Apresentacao::class);
    }

    //listar todos os eventos em que a apresentacao estará
    public function eventos(){
        //relacionamento n - n 
        return $this->belongsToMany(Evento::class,
            'evento_apresentacao','id');
    }//'evento_apresentacao': tabela intermediária que será usada para conectar apresentacao e evento
}

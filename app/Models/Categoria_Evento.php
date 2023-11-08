<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_Evento extends Model
{
    use HasFactory;

    protected $table = "categoria_evento";

    protected $fillable = ['nome'];

    public function evento_item(){
        //relacionamento 1 - n 
        return $this->hasMany(Evento::class);
    }
}

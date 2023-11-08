<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria_Apresentacao extends Model
{
    use HasFactory;

    protected $table = "categoria_apresentacao";

    protected $fillable = ['nome'];

    public function apresentacao(){
        //relacionamento 1 - n  
        return $this->hasMany(Apresentacao::class);
    }
}

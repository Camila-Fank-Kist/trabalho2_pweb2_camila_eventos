<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Local extends Model
{
    use HasFactory;

    protected $table = "tipo_local";

    protected $fillable = ['nome'];

    public function local(){
        //relacionamento 1 - n
        return $this->hasMany(Local::class);
    }
}

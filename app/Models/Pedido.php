<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = "pedido";

    protected $fillable = [
        'user_id',
        'evento_id',
        'quantidade',
        'pagamento_id',
    ];

    protected $casts = [
        'user_id'=> "integer",
        'evento_id'=> "integer",
        'quantidade'=> "integer",
        'pagamento_id'=> "integer",
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

    public function pagamento(){
        //relacionamento 1 - 1
        return $this->belongsTo(Pagamento::class,
            'pagamento_id','id');
    }
}

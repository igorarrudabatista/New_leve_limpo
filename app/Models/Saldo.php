<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'saldo';
    public $timestamps = false;

    public function empresa_cliente(){
        return $this->belongsTo(Empresa_Cliente::class);
        }

    public function produto(){
            return $this->belongsTo(Produto::class);
        }    
}

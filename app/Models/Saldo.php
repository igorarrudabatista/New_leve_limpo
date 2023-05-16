<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'saldo';

    public function empresa_cliente(){
        return $this->belongsTo(Empresa_Cliente::class);
        }
}

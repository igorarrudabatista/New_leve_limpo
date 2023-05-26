<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{

    use HasFactory;
    protected $casts = [
        'DescProdutos' => 'array'
    ];
    protected $fillable = [
        'data', 'Status', 'Observacoes', 
    ];
    protected $table = 'pedidos';
    public $timestamps = false;


    public function produto() {
        return $this->belongsToMany(Produto::class)->withPivot(['Quantidade']);
    }   
    
    public function empresa_cliente() {
      return $this->belongsTo(Empresa_Cliente::class, 'empresa_cliente_id');
      }      


      public function produto_recibo() {

        return $this->belongsToMany(Recibo_Produto::class);

      }

    

}

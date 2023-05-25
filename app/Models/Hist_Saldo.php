<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hist_Saldo extends Model
{
    use HasFactory;

    protected $fillable = [
        'hist_valor_saldo', 'hist_Observacoes', 'empresa_cliente_id', 
    ];
     protected $primaryKey = 'empresa_cliente_id';

    protected $table = 'hist_saldo';

    public function empresa_cliente(){
        return $this->belongsTo(Empresa_Cliente::class);
        }


        public function setSomaSaldo($saldo)
        {
            // Conta Existente
            if ($this->exists)
            {
                $this->attributes['valor_saldo'] =
                    $this->attributes['valor_saldo'] + $saldo;
                $this->save();
            }
            return $this;
        }
    
        public function setSubtrairSaldo($saldo)
        {
            // Conta Existente
            if ($this->exists)
            {
                $this->attributes['saldo'] =
                    $this->attributes['saldo'] - $saldo;
                $this->save();
            }
            return $this;
        }


}

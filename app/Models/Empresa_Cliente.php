<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa_Cliente extends Model
{



    use HasFactory;
    protected $table = 'empresa__clientes';

    protected $guarded = [];

    protected $fillable = [
        'Cnpj', 'Nome_responsavel', 'Nome_fantasia', 'Cpf', 'Email',
        'Telefone', 'Site', 'Endereco','Cidade', 'Estado', 'Bairro',
         'Cep', 'Numero', 'Instagram', 'Facebook', 'image'
    ];


    public function produto() {
        return $this->belongsToMany(Produto::class)->withPivot(['Quantidade']);
    }   

    public function orcamento(){
        return $this->belongsTo(Orcamento::class);
        
    }

    public function Recibo() {
        return $this->belongsTo(Recibo::class, 'empresa_cliente_id');
        }   
    public function saldo() {
        return $this->belongsToMany(Saldo::class,)->withPivot(['Observacoes']);
        }   

}

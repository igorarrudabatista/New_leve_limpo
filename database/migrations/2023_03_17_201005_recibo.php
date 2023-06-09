<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo', function (Blueprint $table) {

        $table->increments('id');

        $table->foreignId('empresa_cliente_id')->constrained('empresa__clientes')->onDelete('cascade');
        
        $table->string('DataEntrega')->nullable();
        $table->string('DataRetirada')->nullable();
        $table->decimal('Taxa')->nullable();
        $table->decimal('Desconto')->nullable();
        $table->string('MensagemCliente')->nullable();
        $table->string('Observacoes')->nullable();

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibo');

    }
};

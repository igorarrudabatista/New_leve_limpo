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
        Schema::create('saldo', function (Blueprint $table) {

            $table->string('valor_saldo')->nullable();
            $table->string('Observacoes')->nullable();

            $table->foreignId('empresa_cliente_id')->constrained('empresa__clientes')->onDelete('cascade');

            //$table->foreignId('saldo_id')->constrained('empresa__clientes')->onDelete('cascade');
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
        Schema::dropIfExists('saldo');

    }
};

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
        Schema::create('pedidos', function (Blueprint $table) {

        $table->increments('id');

        $table->foreignId('empresa_cliente_id')->constrained('empresa__clientes')->onDelete('cascade');
        $table->date('data')->nullable();
        $table->string('Status')->nullable();
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
        Schema::dropIfExists('pedidos');

    }
};

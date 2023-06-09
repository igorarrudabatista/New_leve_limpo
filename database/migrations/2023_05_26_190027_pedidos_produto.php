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
        Schema::create('pedidos_produto', function (Blueprint $table) {

            // $table->foreign('orcamento_id')->references('id')->on('orcamentos');
            // $table->foreign('produto_id'  )->references('id')->on('produtos');
             $table->integer('Quantidade');
     
             $table->unsignedInteger('pedidos_id');
             $table->foreign('pedidos_id')->references('id')->on('pedidos')->onDelete('cascade');
                
               $table->unsignedInteger('produto_id');
               $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');


         });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos_produto');

    }
};

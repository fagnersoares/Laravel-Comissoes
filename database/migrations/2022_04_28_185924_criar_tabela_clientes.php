<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('op_cliente',function(Blueprint $table){
            $table->increments('id');
            $table->string('cliente_nome');
            $table->string('cliente_cnpj');
            $table->string('cliente_cep');
            $table->string('cliente_endereco');
            $table->string('cliente_bairro');
            $table->string('cliente_cidade');
            $table->string('cliente_estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('op_cliente');
    }
}

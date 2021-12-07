<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescricaoservicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descricaoservicos', function (Blueprint $table) {
            $table->string('numero_servico');
            $table->string('tipo_servico');
            $table->string('nome_prestador');
            $table->string('telefone_prestador');
            $table->string('nome_cliente');
            $table->string('telefone_cliente');
            $table->string('end_cliente');
            $table->string('custo_servico');
            $table->string('forma_pagamento');
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
        Schema::dropIfExists('descricaoservicos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestadors', function (Blueprint $table) {
            $table->id();
            $table->string('nome_prestador');
            $table->string('end_prestador');
            $table->string('telefone_prestador');
            $table->string('cpf_prestador')->unique();
            $table->string('profissao');
            $table->string('email_prestador')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('senha_prestador');
            $table->rememberToken();
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
        Schema::dropIfExists('prestadors');
    }
}

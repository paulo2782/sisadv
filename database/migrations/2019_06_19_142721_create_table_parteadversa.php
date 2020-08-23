<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableParteadversa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parteadversas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('NOME',100)->nullable();
            $table->string('CPF_CNPJ',14)->nullable();
            $table->string('RG',15)->nullable();
            $table->string('RAMO_ATUACAO',150)->nullable();     
            $table->string('RESPONSAVEL',150)->nullable();     
            $table->string('EMAIL',150)->nullable();                 
            $table->string('PROFISSAO',100)->nullable();
            $table->string('ESTADO_CIVIL',25)->nullable();
            $table->string('FONE',14)->nullable();
            $table->string('WHATSAPP',14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parteadversas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user')->nullable();
            $table->string('nome')->nullable();
            $table->string('email')->nullable();
            $table->string('celular')->nullable();
            $table->string('nome_pet')->nullable();
            $table->string('raca')->nullable();
            $table->string('tipo_pet')->nullable();
            $table->string('vacinas')->nullable();
            $table->string('idade_aprox')->nullable();
            $table->string('sexo')->nullable();
            $table->integer('numero_filhotes')->nullable();
            $table->text('obs')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}

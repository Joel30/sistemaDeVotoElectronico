<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ci');
            $table->string('avatar')->default('/nuevo/default.jpg');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->string('direccion');
            $table->date('fechaNacimiento');
            $table->timestamps();
        });

        Schema::create('electores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('persona_id');
            $table->integer('voto')->default(0);
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->timestamps();
        });

        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->timestamps();
        });

        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('persona_id');
            $table->string('usuario');
            $table->string('password');
            $table->string('rol');
            $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::dropIfExists('personas');
        Schema::dropIfExists('electores');
        Schema::dropIfExists('candidatos');
        Schema::dropIfExists('usuarios');
    }
}

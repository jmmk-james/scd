<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->text('correo');
            $table->text('pass');
            $table->integer('tipo');
            $table->integer('id_persona');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *table
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}

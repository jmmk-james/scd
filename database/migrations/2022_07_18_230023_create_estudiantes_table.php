<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_persona');
            $table->integer('id_profecion');
            $table->integer('id_grado');
            $table->integer('id_carrera');
            $table->integer('id_universidad');
            $table->text('otro_profecion');
            $table->text('otro_carrera');
            $table->text('otro_universidad');
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
        Schema::dropIfExists('estudiantes');
    }
}

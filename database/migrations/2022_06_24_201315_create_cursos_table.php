<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('detalle');
            $table->integer('carga');
            $table->string('fecha',20);
            $table->integer('gestion');
            $table->text('relevancia');
            $table->text('promo');
            $table->text('plantilla');
            $table->string('orientacion',10);
            $table->integer('id_tipocurso');
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
        Schema::dropIfExists('cursos');
    }
}

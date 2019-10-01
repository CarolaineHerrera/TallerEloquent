<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAutoresLibrosAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores_libros_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('libro_id')->unsigned();
            $table->foreign('alumno_id')->references('id')
            ->on('alumnos')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('libro_id')->references('id')
            ->on('libros')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('autores_libros_alumnos');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id_p');                     //llave primaria
          $table->string('titulo_p', 50);                 //título promoción
          $table->text('imagen_p');                       //imagen promoción
          $table->boolean('birthday_p');                  //es promoción de cumpleaños?
          $table->boolean('destacado_p');                 //promoción destacada en inicio?
          $table->boolean('aprobacion_p');                //la promoción está aprobada?
          $table->unsignedInteger('id_est1');
          $table->timestamps();

          $table->foreign('id_est1')->references('id_est')->on('establecimientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promos');
    }
}

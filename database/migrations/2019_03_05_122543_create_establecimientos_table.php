<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id_est');
          $table->string('nombre_est', 25);
          $table->text('direccion_est');
          $table->text('facebook_est');
          $table->unsignedInteger('id_n1');

          $table->foreign('id_n1')->references('id_n')->on('negocios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
}

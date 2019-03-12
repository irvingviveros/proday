<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_dias', function (Blueprint $table) {
          $table->unsignedInteger('id_p1');
          $table->unsignedInteger('id_d1');

          $table->foreign('id_p1')->references('id_p')->on('promos');
          $table->foreign('id_d1')->references('id_d')->on('dias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo_dias');
    }
}

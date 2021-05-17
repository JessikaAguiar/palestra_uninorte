<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('obra_id');
            $table->integer('autor_id');

            $table->foreign('obra_id')->references('id')->on('obras');
            $table->foreign('autor_id')->references('id')->on('autores');
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
        Schema::dropIfExists('autorias');
    }
}

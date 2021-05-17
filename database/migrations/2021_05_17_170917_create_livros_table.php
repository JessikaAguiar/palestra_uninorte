<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_aquisicao');
            $table->integer('edicao');
            $table->integer('obra_id');
            $table->integer('editora_id');

            $table->foreign('obra_id')->references('id')->on('obras');
            $table->foreign('editora_id')->references('id')->on('editoras');
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
        Schema::dropIfExists('livros');
    }
}

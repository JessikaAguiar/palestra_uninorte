<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimentacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('obra_id');
            $table->integer('usuario_id');
            $table->integer('livro_id');
            $table->date('data_emprestimo');
            $table->date('data_prevista');
            $table->date('data_devolucao');
            $table->integer('multa');


            $table->foreign('obra_id')->references('id')->on('obras');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('livro_id')->references('id')->on('livros');


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
        Schema::dropIfExists('movimentacoes');
    }
}

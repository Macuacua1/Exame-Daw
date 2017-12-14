<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('tipocasamento_id')->unsigned();          
            $table->foreign('tipocasamento_id')->references('id')->on('tipo_casamentos');
            $table->integer('ano_inicio');
            $table->integer('ano_fim')->nullable();
            $table->boolean('estado')->default(true);
            $table->integer('esposo_id')->unsigned();          
            $table->foreign('esposo_id')->references('id')->on('cidadao');
            $table->integer('esposa_id')->unsigned();          
            $table->foreign('esposa_id')->references('id')->on('cidadao');
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
        Schema::dropIfExists('casamentos');
    }
}

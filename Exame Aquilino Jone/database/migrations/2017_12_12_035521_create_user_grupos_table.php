<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();          
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('grupo_id')->unsigned();          
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->boolean('state')->default(true);
            $table->string('description')->nullable();
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
        Schema::dropIfExists('user_grupos');
    }
}
